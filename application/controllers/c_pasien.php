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
}