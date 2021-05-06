<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct(){
    parent::__construct();
    if($this->session->userdata('status') != 'berhasil'){
      $this->session->set_flashdata('pesan',
      '<div class="alert alert-danger" role="alert">
  Anda Belum Login
</div>');
        redirect('login');
    }
  }
	public function index()
	{
		$this->load->view('admin/dashboard');
	}
}
