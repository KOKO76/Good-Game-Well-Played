<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_gejala extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->library('m_gejala');
	}

	public function daftar(){
		$tabel = $this->m_gejala->getTabel();
		$data['title']="Daftar Gejala";
		$this->load->view('headeradmin');
		$this->load->view('v_gejala', array('data' => $tabel));
		$this->load->view('footer');
	}
}