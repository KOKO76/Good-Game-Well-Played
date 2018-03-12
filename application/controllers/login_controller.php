<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->library('login_model');
	}

	
	private $message="";

	public function index()
	{
		if (!$this->login_model->isLoggedIn()) 
		{
			/* Data */
			$data['title']="Login";
			$data['message']=$this->message;

			/* Load View */
			$this->load->view('header');
			$this->load->view('login_view',$data);
			$this->load->view('footer');
		} 
		elseif ($this->session->userdata('level')==1) 
		{
			// redirect ke halaman admin
			print_r($this->session->userdata()); exit();
		}
		else
		{
			// redirect ke halaman pasien
			print_r($this->session->userdata());  exit();
		}
	}


	public function getlogin(){
		$u = $this->input->post('username');
		$p = $this->input->post('password');


		//cek kosong apa tidak 
		if ($u == ""|| $p == ""){

			$data['title']="Login";
			$this->message="Username atau Password Tidak Boleh Kosong";
			$data['message']=$this->message;

			//tampilkan pesan 
			$data['message']=$this->message;
			$this->load->view('header');
			$this->load->view('login_view',$data);
			$this->load->view('footer');
		}
		else
		{
			$result= $this->login_model->login($u, $p);
			if ($result==TRUE && $this->session->userdata('level')==1)
			{
				// panggil fungsi cekUserPass di MyModel
				redirect('#');
			}
			// $result = $this->login_model->login1($u, $p);
			elseif ($this->login_model->login1($u,$p)) 
			{
				redirect('berita');
			}
			else
			{
				$data['title']="Login";
				$this->message="username atau password atau captcha anda salah, silahkan coba lagi";
				$data['message']=$this->message;

				$data['message']=$this->message;
				
				$this->load->view('header');
				$this->load->view('login_view',$data);
				$this->load->view('footer');
			}
		}
	}

	

	public function logout()
	{
        $this->session->sess_destroy();
        redirect('/' ,'refresh');
        exit;
    }

}
