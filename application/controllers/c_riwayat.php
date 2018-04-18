<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_riwayat extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->library('m_riwayat');
		$this->load->helper(array('form','url'));
		$this->load->library('session');
	}

	public function daftar(){
		if ($this->session->userdata('level')==1) 
		{
			$tabel = $this->m_riwayat->getTabel();

			// print_r($tabel); exit();
			$data['title']="Daftar Riwayat";
			$this->load->view('headeradmin');
			$this->load->view('v_riwayat', array('data' => $tabel));
			$this->load->view('footer');
		}
		else
		{
			redirect('c_validasi');
		}

		
	}

	public function menghapusRiwayat($id_riwayat)
	{
		if ($this->session->userdata('level')==1) 
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
		else
		{
			redirect('c_validasi');
		}
		
	}

	public function riwayatPasien()
	{
		if ($this->session->userdata('level')==='pasien') 
		{
			/* Data */
			$this->data['pasien']	= $this->m_riwayat->getRiwayatWhere($this->session->userdata('username'));

			/* Load view */
			$this->load->view('headerpasien');
			$this->load->view('v_riwayatpasien',$this->data);
			$this->load->view('footer');
		}
		else
		{
			redirect('c_validasi');
		}
	}


	public function tes($id_riwayat){

		$data = $this->m_riwayat->tes("$id_riwayat");
		$dat = array(
			'id_riwayat' => $data[0]['id_riwayat'],
			'nama_pasien' => $data[0]['nama_pasien'],
			'umur' => $data[0]['umur'],
			'id_gejala' => $data[0]['id_gejala'],
			'nama_penyakit' => $data[0]['nama_penyakit'],
			'tanggal' => $data[0]['tanggal'],
			'deskripsi' => $data[0]['deskripsi'],
			'penanganan' => $data[0]['penanganan'],
			);		
				
		$this->load->view('v_print', $dat);
		
	}




}