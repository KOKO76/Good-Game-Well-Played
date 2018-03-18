<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Ini digunakan untuk mencoba metode demptser shafer
*/
class v_konsultasi extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('coba_model');
	}

	public function index()
	{
		$this->data['gejala']= $this->coba_model->getGejala();
		$this->load->view('headeradmin');
		$this->load->view('coba/index',$this->data);
		$this->load->view('footer');
	}


	public function diagnosa()
	{

		/* Gejala yang dipilih pasien */
		$selected 		= $this->input->post('gejala');
		$environment	= $this->coba_model->getEnvironment();
		$evidence		= $this->coba_model->getMassFunction($selected);

		if (count($selected) < 2) {
			echo "kurang bro";
		} 
		else 
		{
			//--- menentukan nilai densitas
      echo "== MENENTUKAN NILAI DENSITAS ==\n";
      echo "<br/>";
      $mcount  = 1;
      $densitas_baru=array();
      while(!empty($evidence)){
          $densitas1[0]=array_shift($evidence);
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
          $theta=1;

          foreach($densitas2 as $d) $theta-=$d[1];
          $densitas2[]=array($environment[0]["environment"],$theta);
          echo "m".$mcount."{ø} = 1 - ". $densitas2[0][1]. " = ". $densitas2[1][1]."<br/>";
          $m=count($densitas2);
          $densitas_baru=array();
          for($y=0;$y<$m;$y++){
              for($x=0;$x<2;$x++){
                  if(!($y==$m-1 && $x==1)){
                      $v=explode(',',$densitas1[$x][0]);
                      $w=explode(',',$densitas2[$y][0]);
                      sort($v);
                      sort($w);
                      $vw=array_intersect($v,$w);
                      if(empty($vw)){
                          $k="&theta;";
                      }else{
                          $k=implode(',',$vw);
                      }
                      if(!isset($densitas_baru[$k])){
                          $densitas_baru[$k]=$densitas1[$x][1]*$densitas2[$y][1];
                      }else{
                          $densitas_baru[$k]+=$densitas1[$x][1]*$densitas2[$y][1];
                      }
                  }
              }
          }
          foreach($densitas_baru as $k=>$d){
              if($k!="&theta;"){
                  $densitas_baru[$k]=$d/(1-(isset($densitas_baru["&theta;"])?$densitas_baru["&theta;"]:0));
              }
          }

          $mcount++;
          echo "m".$mcount."{".key($densitas_baru)."} = ".$densitas_baru[key($densitas_baru)]. "<br/>";
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
    $result				=$this->coba_model->final_codes($final_codes); 
    // print_r($result); exit();
    echo "Terdeteksi penyakit <b>{$result[0][0]}</b> dengan derajat kepercayaan ".round($densitas_baru[$codes[0]]*100,2)."%"; 

		exit();
		/* Data */
		$this->data['evidence'] = $evidence;

		/* Load View */
		$this->load->view('coba/diagnosa', $this->data);
	}

	
}