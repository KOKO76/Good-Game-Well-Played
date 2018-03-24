<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Ini digunakan untuk mencoba metode demptser shafer
*/
class c_konsultasi extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('m_konsultasi');
	}

	public function index()
	{
		$this->data['gejala']= $this->m_konsultasi->getGejala();
		$this->load->view('headeradmin');
		$this->load->view('v_konsultasi',$this->data);
		$this->load->view('footer');
	}


	public function diagnosa()
	{

		/* Gejala yang dipilih pasien */
		$selected 		  = $this->input->post('gejala');
		$environment    = $this->m_konsultasi->getEnvironment();
		$evidence       = $this->m_konsultasi->getMassFunction($selected);

    $this->data['jumGejala']   = count($selected);

		if (count($selected) < 2) {
			echo "kurang bro";
		} 
		else 
		{
      /* Mengambil data gejala yang dicentang */
      $this->data['dataGejala'] = $this->m_konsultasi->getGejalaWhere($selected);
      
			//--- menentukan nilai densitas
      echo "== MENENTUKAN NILAI DENSITAS ==\n";
      echo "<br/>";

      // Variable untuk menampung data gejala dan perhitungan densitas baru
      $dataGejala       = array();
      $dataDensitasBaru = array();

      
      $mcount  = 1;
      $densitas_baru=array();
      // simulasi variabel $evidence
      // Array ( [0] => P08 [1] => 0.61 ) [1] => Array ( [0] => P08 [1] => 0.90 )

      while(!empty($evidence)){
          // menghapus element pertama dari array dan mengmbalikan value yang elemen yang terhapus tsb
          $densitas1[0]=array_shift($evidence); 
          // nilai pls
          $densitas1[1]=array($environment[0]["environment"],1-$densitas1[0][1]);

          // Menampilkan nilai
          echo "m".$mcount."{".$densitas1[0][0]."} = ".$densitas1[0][1]."<br/>";
          echo "m".$mcount."{ø} = 1 - ". $densitas1[0][1] ." = ". $densitas1[1][1]."<br/>";

          $densitas2=array();
          if(empty($densitas_baru)){
            $mcount = $mcount + 1;
            $densitas2[0]=array_shift($evidence);
            echo "m".$mcount."{".$densitas2[0][0]."} = ".$densitas2[0][1]."<br/>";

          }else{
              foreach($densitas_baru as $k=>$r){
                  if($k!="&theta;"){
                      $densitas2[]=array($k,$r);
                  }
              }
          }

          // nilai pls
          $theta=1;
          foreach($densitas2 as $d) $theta-=$d[1];
          $densitas2[]=array($environment[0]["environment"],$theta);

        // simulasi variable $densitas1
        // Array ( [0] => Array ( [0] => P08 [1] => 0.61 ) [1] => Array ( [0] => P01,P02,P03,P04,P05,P06,P07,P08 [1] => 0.39 ) ) 

        // simulasi variable $densitas2
        // Array ( [0] => Array ( [0] => P08 [1] => 0.90 ) [1] => Array ( [0] => P01,P02,P03,P04,P05,P06,P07,P08 [1] => 0.1 ) ) 

          echo "m".$mcount."{ø} = 1 - ". $densitas2[0][1]. " = ". $densitas2[1][1]."<br/>";
          $m=count($densitas2);

          // set $densitas_baru menjadi kosong lagi untuk menampung perhitungan densitas baru
          $densitas_baru=array();

          // perhitungan Aturan kombinasi utk mencari densitas baru
          for($y=0;$y<$m;$y++){
              for($x=0;$x<2;$x++){
                // !($y==$m-1 && $x==1) berfungsi supaya perkalian antara PLS pada $densitas1 dan $densitas2 tidak dilakukan
                  if(!($y==$m-1 && $x==1)){
                      // $v mewakili id_penyakit x dan v mewakili id_penyakit y
                      $v=explode(',',$densitas1[$x][0]);
                      $w=explode(',',$densitas2[$y][0]);
                      sort($v); 
                      sort($w);
                      // array_intersect($v,$w) ini berfungsi untuk melakukan irisan terhadap variable $v dan $w
                      $vw=array_intersect($v,$w);

                      if(empty($vw)){
                        // jika hasil irisan kosong maka dia adalah theta
                        $k="&theta;";
                      }else{
                        // jika hasil irisan ada maka tampung di variable $k
                          $k=implode(',',$vw);
                      }

                      if(!isset($densitas_baru[$k])){
                        // jika densitas_baru kosong maka
                          $densitas_baru[$k]=$densitas1[$x][1]*$densitas2[$y][1];
                      }else{
                        // jika densitas_baru tidak kosong maka
                          $densitas_baru[$k]+=$densitas1[$x][1]*$densitas2[$y][1];
                      }
                  }
              }
          }

          echo "<br/>string ";
          print_r($densitas_baru);
          echo "string <br/>";

          // simulasi  variable $densitas_baru 
          // Array ( [P08] => 0.961 ) 

          foreach($densitas_baru as $k=>$d){
              if($k!="&theta;"){
                // perhitungan densitas baru
                // (isset($densitas_baru["&theta;"])?$densitas_baru["&theta;"]:0)
                // berguna untuk mengecek nilai pada $densitas_baru["&theta;"], jika tidak ada maka nilainya = 0
                  $densitas_baru[$k]=$d/(1-(isset($densitas_baru["&theta;"])?$densitas_baru["&theta;"]:0));
              }
          }


          // echo "m".$mcount."{".key($densitas_baru)."} = ".$densitas_baru[key($densitas_baru)]. "<br/>";
          // print_r($densitas_baru); echo "<br/>";
      }
		}

		echo "<br/><br/>";
		//--- perangkingan
    echo "== PERANGKINGAN ==\n";
    echo "<br/>";
    unset($densitas_baru["&theta;"]);
    arsort($densitas_baru);
    print_r($densitas_baru);
    
    echo "<br/><br/>";
    //--- menampilkan hasil akhir
    echo "== HASIL AKHIR ==\n";
    echo "<br/>";
    $codes 				=array_keys($densitas_baru); 
    $final_codes	=explode(',',$codes[0]); 
    $result				=$this->m_konsultasi->final_codes($final_codes); 
    // print_r($result); exit();
    echo "Terdeteksi penyakit <b>{$result[0][0]}</b> dengan derajat kepercayaan ".round($densitas_baru[$codes[0]]*100,2)."%"; 

		/* Data */
		$this->data['evidence'] = $evidence;

		/* Load View */
    $this->load->view('headeradmin');
    $this->load->view('v_hasildiagnosa', $this->data);
    $this->load->view('footer');
		
	}

	
}