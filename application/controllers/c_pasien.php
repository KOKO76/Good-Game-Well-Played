<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_pasien extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->library('m_pasien');
	}

	public function daftar(){
		if ($this->session->userdata('level')==1) 
		{
			$tabel = $this->m_pasien->getTabel();
			$data['title']="Daftar Pasien";
			$this->load->view('headeradmin');
			$this->load->view('v_pasien', array('data' => $tabel));
			$this->load->view('footer');
		}
		else
		{
			redirect('c_validasi');
		}
		
	}

	public function cekPK()	{
		  $username_p 	= $this->input->post('username_p');    
		  $query 		= $this->m_pasien->getPK($username_p);  
	    
	    $status ="true";  
	    if($query)
	    {
		   $status = "false";
		  }                
	  	echo $status;
	}

	public function tambah()
	{
		$data['pesan']='';
		$head['title']='Input Data Pasien';
		$this->load->view('headerlogin', $head);
		$this->load->view('v_daftarpasien', $data);
		$this->load->view('footer');
	}

	public function menambahPasien(){
		
		$username_p = $_POST['username_p'];
		$password = md5($_POST['password']);
		$nama_pasien = $_POST['nama_pasien'];
		$umur = $_POST['umur'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$no_tlp = $_POST['no_tlp'];
		$alamat = $_POST['alamat'];
				
		$data_masukan = array(
				'username_p' => $username_p,
				'password' => $password,
				'nama_pasien' => $nama_pasien,
				'umur' => $umur,
				'jenis_kelamin' => $jenis_kelamin,
				'no_tlp' => $no_tlp,
				'alamat' => $alamat,
			);

		$mhs = $this->m_pasien->querymenambahpasien('pasien',$data_masukan);
		if($mhs >= 1){
			if($mhs){
			$data['pesan']='TRUE';
			}
			else{
				$data['pesan']='FALSE';
			}
			
			$head['title']='';
			$this->load->view('headerlogin', $head);
			$this->load->view('v_login', $data);
			$this->load->view('footer');

		}
		else{
			echo "<h1>Insert data gagal </h1>";
		}
		
	}

	public function menghapusPasien($username_p)
	{
		if ($this->session->userdata('level')==1 OR $this->session->userdata('level')==='pasien') 
		{
			$where = array('username_p' => $username_p );

			$mhs = $this->m_pasien->querymenghapuspasien('pasien', $where);

			if($mhs >= 1){
				
			$head['title']='Daftar Pasien';
			$mhs = $this->m_pasien->getTabel('pasien');
			$this->load->view('headeradmin',$head);
			$this->load->view('v_pasien' , array('data' => $mhs));
			$this->load->view('footer');

			}else{
				echo "<h1>hapus data gagal </h1>";
			}
		}
		else
		{
			redirect('c_validasi');
		}
		
	}

	public function profilPasien()
	{
		if ($this->session->userdata('level')==='pasien') 
		{
			/* Data */
			$this->data['pasien']	= $this->m_pasien->getPasienWhere($this->session->userdata('username'));

			/* Load view */
			$this->load->view('headerpasien');
			$this->load->view('v_profilpasien',$this->data);
			$this->load->view('footer');
		}
		else
		{
			redirect('c_validasi');
		}
	}

	public function mengubahPasien(){
		if ($this->session->userdata('level')=='pasien') 
		{
			$data['pesan']='';
			/* Data */
			$this->data['pasien']	= $this->m_pasien->getPasienWhere($this->session->userdata('username'));

			/* Load view */
			$this->load->view('headerpasien');
			$this->load->view('v_ubahpasien',$this->data);
			$this->load->view('footer');
		}
		else
		{
			redirect('c_validasi');
		}
	}

	public function ubahPasien(){
		if ($this->session->userdata('level')=='pasien') 
		{
			$username_p = $_POST['username_p'];
			$password = md5($_POST['password']);
			$nama_pasien = $_POST['nama_pasien'];
			$umur = $_POST['umur'];
			$jenis_kelamin = $_POST['jenis_kelamin'];
			$no_tlp = $_POST['no_tlp'];
			$alamat = $_POST['alamat'];
					
			$data_masukan = array(
					'password' => $password,
					'nama_pasien' => $nama_pasien,
					'umur' => $umur,
					'jenis_kelamin' => $jenis_kelamin,
					'no_tlp' => $no_tlp,
					'alamat' => $alamat,
				);

			$where = array('username_p' => $username_p );
			$mhs = $this->m_pasien->querymengubahpasien('pasien',$data_masukan, $where);
			if($mhs >= 'pasien'){
				if($mhs){
				$data['pesan']='TRUE';
				}
				else{
					$data['pesan']='FALSE';
				}
				
				redirect('c_pasien/profilPasien');

			}
			else{
				echo "<h1>Insert data gagal </h1>";
			}
		}
		else
		{
			redirect('c_validasi');
		}
	}

	
}