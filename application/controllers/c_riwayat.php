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
		$data['title']="Daftar Riwayat";
		$this->load->view('headeradmin');
		$this->load->view('v_riwayat', array('data' => $tabel));
		$this->load->view('footer');
	}
}