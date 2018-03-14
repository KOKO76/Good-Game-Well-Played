<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_penyakit extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->library('m_penyakit');
	}

	public function daftar(){
		$tabel = $this->m_penyakit->getTabel();
		$data['title']="Daftar Penyakit";
		$this->load->view('headeradmin');
		$this->load->view('v_penyakit', array('data' => $tabel));
		$this->load->view('footer');
	}
}