<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_validasi extends CI_Controller {


	function __construct()
	{
		parent::__construct();

		$this->load->library('m_validasi');
	}

	
	private $message="";

	public function index()
	{
		if (!$this->m_validasi->isLoggedIn()) 
		{
			/* Data */
			$data['title']="Login";
			$data['message']=$this->message;

			/* Load View */
			$this->load->view('headerlogin');
			$this->load->view('v_login',$data);
			$this->load->view('footer');
		} 
		elseif ($this->session->userdata('level')==1) 
		{
			// redirect ke halaman admin
			redirect('c_berandaadmin');
		}
		else
		{
			// redirect ke halaman pasien
			redirect('c_berandapasien');
		}
	}


	public function getlogin(){
		$u = $this->input->post('username');
		$p = $this->input->post('password');

			$result= $this->m_validasi->login($u, $p);
			if ($result==TRUE && $this->session->userdata('level')==1)
			{
				// panggil fungsi cekUserPass di MyModel
				redirect('c_berandaadmin');
			}
			// $result = $this->m_validasi->login1($u, $p);
			elseif ($this->m_validasi->login1($u,$p)) 
			{
				redirect('c_berandapasien');
			}
			else
			{
				$data['title']="Login";
				$this->message="username atau password atau captcha anda salah, silahkan coba lagi";
				$data['message']=$this->message;

				$data['message']=$this->message;
				
				$this->load->view('headerlogin');
				$this->load->view('v_login',$data);
				$this->load->view('footer');
			}
	}

	

	public function logout()
	{
        $this->session->sess_destroy();
        redirect('/' ,'refresh');
        exit;
    }

}
