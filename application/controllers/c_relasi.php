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
}