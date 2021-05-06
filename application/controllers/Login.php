<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('status') == 'berhasil'){
			$this->session->set_flashdata('pesan',
			'<div class="alert alert-success" role="alert">
				Anda Berhasil Login
				</div>');
				redirect('admin');
		}
	}

	public function index()
	{

		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required');
		if ($this->form_validation->run() == FALSE)
		{
        $this->load->view('login/login');

	}else{
		$auth = $this->Model_auth->cek_login();

		if($auth == FALSE){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">
		Username atau password salah
		</div>');
				redirect('login');
		}else{
			$this->session->set_userdata('email',$auth->email);
				$this->session->set_userdata('status',$auth->status);
				$this->session->set_flashdata('pesan',
				'<div class="alert alert-success" role="alert">
		Anda Berhasil Login
		</div>');
			redirect('admin');
		}
	}

	}
}
