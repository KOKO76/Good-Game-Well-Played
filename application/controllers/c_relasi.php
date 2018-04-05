<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_relasi extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->library('m_relasi');
	}

	public function daftar(){
		if ($this->session->userdata('level')==1) 
		{
			$tabel = $this->m_relasi->getTabel();
			$data['title']="Daftar Relasi";
			$this->load->view('headeradmin');
			$this->load->view('v_relasi', array('data' => $tabel));
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
			$head['title']='Input Data Relasi';

			$data['penyakit'] = $this->m_relasi->getPenyakit();
			$data['gejala'] = $this->m_relasi->getGejala();

			$this->load->view('headeradmin', $head);
			$this->load->view('v_tambahrelasi', $data);
			$this->load->view('footer');
		}
		else
		{
			redirect('c_validasi');
		}
		
	}

	public function menambahRelasi(){
		if ($this->session->userdata('level')==1) 
		{
			$id_relasi = $_POST['id_relasi'];
			$id_penyakit = $_POST['id_penyakit'];
			$id_gejala = $_POST['id_gejala'];
			$bobot = $_POST['bobot'];
					
			$data_masukan = array(
					'id_relasi' => $id_relasi,
					'id_penyakit' => $id_penyakit,
					'id_gejala' => $id_gejala,
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
		else
		{
			redirect('c_validasi');
		}
		
	}

	public function mengubahRelasi($id_relasi){
		if ($this->session->userdata('level')==1) 
		{
			$data['pesan']='';
			$data = $this->m_relasi->Getdat(" where id_relasi = '$id_relasi'");
			$data1 = $this->m_relasi->getPenyakit();
			$data2= $this->m_relasi->getGejala();


			$dat = array(
				'id_relasi' => $data[0]['id_relasi'],
				'id_penyakit' => $data[0]['id_penyakit'],
				'id_gejala' => $data[0]['id_gejala'],
				'nama_penyakit'=> $data1,
				'nama_gejala'=> $data2,
				'bobot' => $data[0]['bobot'],
				);

			$data['title']='Ubah Data Relasi';
			$this->load->view('headeradmin');
			$this->load->view('v_ubahrelasi', $dat);
			$this->load->view('footer');
		}
		else
		{
			redirect('c_validasi');
		}
		

		
	}

	public function menghapusRelasi($id_relasi)
	{
		if ($this->session->userdata('level')==1) 
		{
			$where = array('id_relasi' => $id_relasi);

			$mhs = $this->m_relasi->querymenghapusrelasi('relasi', $where);

			if($mhs >= 1){
				
			$head['title']='Daftar Relasi';
			$mhs = $this->m_relasi->getTabel('relasi');
			$this->load->view('headeradmin',$head);
			$this->load->view('v_relasi' , array('data' => $mhs));
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

	public function ubahRelasi(){
		if ($this->session->userdata('level')==1) 
		{
			$id_relasi 		= $_POST['id_relasi'];
			$id_relasi2 	= $_POST['id_relasi2'];
			$id_penyakit 	= $_POST['id_penyakit'];
			$id_gejala 		= $_POST['id_gejala'];
			$bobot 				= $_POST['bobot'];
					
			$data_masukan = array(
					'id_relasi' 	=> $id_relasi,
					'id_penyakit' => $id_penyakit,
					'id_gejala' 	=> $id_gejala,
					'bobot' 			=> $bobot,
				);


			$where = array('id_relasi' => $id_relasi2 );
			$mhs = $this->m_relasi->querymengubahrelasi('relasi',$data_masukan, $where);
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
		else
		{
			redirect('c_validasi');
		}

		
	}
}