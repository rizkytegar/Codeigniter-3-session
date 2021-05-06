<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class logout extends CI_Controller {
	public function id()
	{
		$this->session->Sess_destroy();

    redirect('login');
  }
}
