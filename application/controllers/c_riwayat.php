<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_riwayat extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->library('m_riwayat');
	}

	public function daftar(){
		$tabel = $this->m_riwayat->getTabel();

		// print_r($tabel); exit();
		$data['title']="Daftar Riwayat";
		$this->load->view('headeradmin');
		$this->load->view('v_riwayat', array('data' => $tabel));
		$this->load->view('footer');
	}

	public function menghapusRiwayat($id_riwayat)
	{
		$where = array('id_riwayat' => $id_riwayat );

		$mhs = $this->m_riwayat->querymenghapusriwayat('riwayat', $where);

		if($mhs >= 1){
			
		$head['title']='Daftar Riwayat';
		$mhs = $this->m_riwayat->getTabel('riwayat');
		$this->load->view('headeradmin',$head);
		$this->load->view('v_riwayat' , array('data' => $mhs));
		$this->load->view('footer');

		}else{
			echo "<h1>hapus data gagal </h1>";
		}
	}
}