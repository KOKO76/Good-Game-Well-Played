<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_pasien extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->library('m_pasien');
	}

	public function daftar(){
		$tabel = $this->m_pasien->getTabel();
		$data['title']="Daftar Pasien";
		$this->load->view('headeradmin');
		$this->load->view('v_pasien', array('data' => $tabel));
		$this->load->view('footer');
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
			$this->load->view('v_daftarpasien', $data);
			$this->load->view('footer');

		}
		else{
			echo "<h1>Insert data gagal </h1>";
		}
	}
}