<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Ini digunakan untuk mencoba metode demptser shafer
*/
class c_konsultasi extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('m_konsultasi');
	}

	public function index()
	{
		$this->data['gejala']= $this->m_konsultasi->getGejala();
		$this->load->view('headeradmin');
		$this->load->view('v_konsultasi',$this->data);
		$this->load->view('footer');
	}


	public function diagnosa()
	{

		/* Gejala yang dipilih pasien */
		$selected 		  = $this->input->post('gejala');

		if (count($selected) < 2) {
			echo "kurang bro";
		} 
		else 
		{
      $environment    = $this->m_konsultasi->getEnvironment();
      $evidence       = $this->m_konsultasi->getMassFunction($selected);
      $densitasAwal   = $this->m_konsultasi->getDensitasAwal($selected);

      /* Data */
      $this->data['environment']  = $environment;
      $this->data['evidence']     = $evidence;
      $this->data['densitasAwal'] = $densitasAwal;

      /* Load View */
      $this->load->view('headeradmin');
      $this->load->view('v_hasildiagnosa', $this->data);
      $this->load->view('footer');
    }		
	}

	
}