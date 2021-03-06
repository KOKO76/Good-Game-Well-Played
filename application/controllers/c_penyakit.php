<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_penyakit extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->library('m_penyakit');
	}

	public function daftar(){
		if ($this->session->userdata('level')==1) 
		{
			$tabel = $this->m_penyakit->getTabel();
			$data['title']="Daftar Penyakit";
			$this->load->view('headeradmin');
			$this->load->view('v_penyakit', array('data' => $tabel));
			$this->load->view('footer');
		}
		else
		{
			redirect('c_validasi');
		}
		
	}

	public function tambah()
	{
		if ($this->session->userdata('level')==1) 
		{
			$data['pesan']='';
			$head['title']='Input Data Penyakit';
			$this->load->view('headeradmin', $head);
			$this->load->view('v_tambahpenyakit', $data);
			$this->load->view('footer');
		}
		else
		{
			redirect('c_validasi');
		}
		
	}

	public function cekPK()
	{
	  $id_penyakit 	= $this->input->post('id_penyakit');    
	  $query 				= $this->m_penyakit->getPK($id_penyakit);  
    
    $status ="true";  
    if($query)
    {
	   $status = "false";
	  }                
  	echo $status;
	}

	public function menambahPenyakit(){
		if ($this->session->userdata('level')==1) 
		{
			$id_penyakit = $_POST['id_penyakit'];
			$nama_penyakit = $_POST['nama_penyakit'];
			$deskripsi = $_POST['deskripsi'];
			$penanganan = $_POST['penanganan'];
					
			$data_masukan = array(
					'id_penyakit' => $id_penyakit,
					'nama_penyakit' => $nama_penyakit,
					'deskripsi' => $deskripsi,
					'penanganan' => $penanganan,
				);
			$mhs = $this->m_penyakit->querymenambahpenyakit('penyakit',$data_masukan);
			if($mhs >= 1){
				if($mhs){
				$data['pesan']='TRUE';
				}
				else{
					$data['pesan']='FALSE';
				}
				
				$head['title']='';
				$this->load->view('headeradmin', $head);
				$this->load->view('v_tambahpenyakit', $data);
				$this->load->view('footer');

			}
			else{
				echo "<h1>Insert data gagal </h1>";
			}
		}
		else
		{
			redirect('c_validasi');
		}
	}

	public function menghapusPenyakit($id_penyakit)
	{
		if ($this->session->userdata('level')==1) 
		{
			$where = array('id_penyakit' => $id_penyakit );

			$mhs = $this->m_penyakit->querymenghapuspenyakit('penyakit', $where);

			if($mhs >= 1){
				
			$head['title']='Daftar Penyakit';
			$mhs = $this->m_penyakit->getTabel('penyakit');
			$this->load->view('headeradmin',$head);
			$this->load->view('v_penyakit' , array('data' => $mhs));
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

	public function mengubahPenyakit($id_penyakit){
		if ($this->session->userdata('level')==1) 
		{
			$data['pesan']='';
			$data = $this->m_penyakit->Getdat(" where id_penyakit = '$id_penyakit'");
			$dat = array(
				'id_penyakit' => $data[0]['id_penyakit'],
				'nama_penyakit' => $data[0]['nama_penyakit'],
				'deskripsi' => $data[0]['deskripsi'],
				'penanganan' => $data[0]['penanganan'],
				);

			$data['title']='Ubah Data Penyakit';
			$this->load->view('headeradmin');
			$this->load->view('v_ubahpenyakit', $dat);
			$this->load->view('footer');
		}
		else
		{
			redirect('c_validasi');
		}
	}

	public function ubahPenyakit(){
		if ($this->session->userdata('level')==1) 
		{
			$id_penyakit = $_POST['id_penyakit'];
			$nama_penyakit = $_POST['nama_penyakit'];
			$deskripsi = $_POST['deskripsi'];
			$penanganan = $_POST['penanganan'];
					
			$data_masukan = array(
					'id_penyakit' => $id_penyakit,
					'nama_penyakit' => $nama_penyakit,
					'deskripsi' => $deskripsi,
					'penanganan' => $penanganan,
				);
			$where = array('id_penyakit' => $id_penyakit );
			$mhs = $this->m_penyakit->querymengubahpenyakit('penyakit',$data_masukan, $where);
			if($mhs >= 1){
				if($mhs){
				$data['pesan']='TRUE';
				}
				else{
					$data['pesan']='FALSE';
				}
				
				$head['title']='';
				$this->load->view('headeradmin', $head);
				$this->load->view('v_tambahpenyakit', $data);
				$this->load->view('footer');

			}
			else{
				echo "<h1>Insert data gagal </h1>";
			}
		}
		else
		{
			redirect('c_validasi');
		}
	}

	public function infopenyakit(){
		if ($this->session->userdata('level')==1 OR $this->session->userdata('level')==='pasien') 
		{
			$tabel = $this->m_penyakit->getTabel();
			$data['title']="Info Penyakit";
			$this->load->view('headerpasien');
			$this->load->view('v_infopenyakit', array('data' => $tabel));
			$this->load->view('footer');
		}
		else
		{
			redirect('c_validasi');
		}
	}

}