<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Ini digunakan untuk mencoba metode demptser shafer
*
*/
class c_konsultasi extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->helper('form');
    $this->load->model('m_konsultasi');
		$this->load->model('m_riwayat');
	}

	public function index()
	{
		$this->data['gejala']= $this->m_konsultasi->getGejala();
		$this->load->view('headerpasien');
		$this->load->view('v_konsultasi',$this->data);
		$this->load->view('footer');
	}


	public function diagnosa()
	{

		/* Gejala yang dipilih pasien */
		$selected 		  = $this->input->post('gejala');

		if (count($selected) < 3) {
       $dataGejala    = $this->m_konsultasi->getDataGejala($selected);
        $this->data['dataGejala']  = $dataGejala;

			$this->load->view('headerpasien');
      $this->load->view('v_hasildiagnosa2', $this->data);
      $this->load->view('footer');
		} 
		else 
		{
      $environment    = $this->m_konsultasi->getEnvironment();
      $evidence       = $this->m_konsultasi->getMassFunction($selected);
      $dataGejala   	= $this->m_konsultasi->getDataGejala($selected);

      $densitas_baru=array();
		  while(!empty($evidence)){
          
          $densitas1[0]=array_shift($evidence);
          $densitas1[1]=array($environment[0]["environment"],1-$densitas1[0][1]);

          $densitas2=array();
          if(empty($densitas_baru)){
              $densitas2[0]=array_shift($evidence);
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
      }

			// Perangkingan
	    unset($densitas_baru["&theta;"]);
	    arsort($densitas_baru);
	    
	    // HASIL AKHIR
	    $codes 				= array_keys($densitas_baru);
	    $final_codes	= explode(',',$codes[0]); 
	    $hasil_akhir	= $this->m_konsultasi->final_codes($final_codes);
      // echo "Terdeteksi penyakit <b>{$result[0][0]}</b> dengan derajat kepercayaan ".round($densitas_baru[$codes[0]]*100,2)."%";

	    // Simpan hasil akhir ke riwayat

      // start membuat id_riwayat
      $idRiwayatTerbaru = $this->m_riwayat->getLastDataRiwayat();
      $akhirBulan       = date("t", strtotime(@$idRiwayatTerbaru[0]['tanggal']));
      $tanggal          = substr(@$idRiwayatTerbaru[0]['tanggal'], 8,2);
      $noUrut           = 0;

      if($tanggal == $akhirBulan || $tanggal == NULL)
      {
        $noUrut  += 1;
      } else 
      {
        $noUrut   = (int) substr($idRiwayatTerbaru[0]['id_riwayat'], 4) + 1 ;
      }

      $id_riwayat = date("m") ."". substr(date("Y"), 2) ."".$noUrut;
      // end

      $id_penyakit  = $hasil_akhir[0]['id_penyakit'];
      $id_gejala    = implode(",", $selected);
      $username_p   = $_SESSION['username'];
      $presentase   = round($densitas_baru[$codes[0]]*100,2);
          
      $data_masukan = array(
          'id_riwayat'  => $id_riwayat,
          'id_penyakit' => $id_penyakit,
          'id_gejala'   => $id_gejala,
          'username_p'  => $username_p,
          'presentase'  => $presentase,
        );

      if ($this->m_riwayat->querymenambahriwayat('riwayat',$data_masukan)) 
      {
        $data['riwayat']  ='TRUE';
      } 
      else
      {
        $data['riwayat']  ='FALSE';
      }

      /* Data */
      $this->data['dataGejala'] 	= $dataGejala;
      $this->data['hasil_akhir']	= $hasil_akhir;
      $this->data['nilai']				= round($densitas_baru[$codes[0]]*100,2);

      /* Load View */
      $this->load->view('headerpasien');
      $this->load->view('v_hasildiagnosa', $this->data);
      $this->load->view('footer');
    }		
	}

}