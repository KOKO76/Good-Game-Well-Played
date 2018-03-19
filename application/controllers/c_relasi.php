<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_relasi extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->library('m_relasi');
	}

	public function daftar(){
		$tabel = $this->m_relasi->getTabel();
		$data['title']="Daftar Relasi";
		$this->load->view('headeradmin');
		$this->load->view('v_relasi', array('data' => $tabel));
		$this->load->view('footer');
	}
	
	public function tambah()
	{
		$data['pesan']='';
		$head['title']='Input Data Relasi';
		$this->load->view('headeradmin', $head);
		$this->load->view('v_tambahrelasi', $data);
		$this->load->view('footer');
	}

	public function menambahRelasi(){
		$id_relasi = $_POST['id_relasi'];
		$nama_penyakit = $_POST['nama_penyakit'];
		$nama_gejala = $_POST['nama_gejala'];
		$bobot = $_POST['bobot'];
				
		$data_masukan = array(
				'id_relasi' => $id_relasi,
				'nama_penyakit' => $nama_penyakit,
				'nama_gejala' => $nama_gejala,
				'bobot' => $bobot,
			);
		$mhs = $this->m_relasi->querymenambahrelasi('relasi',$data_masukan);
		if($mhs >= 1){
			if($mhs){
			$data['pesan']='TRUE';
			}
			else{
				$data['pesan']='FALSE';
			}
			
			$head['title']='';
			$this->load->view('headeradmin', $head);
			$this->load->view('v_tambahrelasi', $data);
			$this->load->view('footer');

		}
		else{
			echo "<h1>Insert data gagal </h1>";
		}
	}
}