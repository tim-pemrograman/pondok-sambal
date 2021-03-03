<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	// Halaman dashboard
	public function index()
	{
		$this->load->view('admin/template/auth_header');
        $this->load->view('admin/auth/login');
		$this->load->view('admin/template/auth_footer');
	}

	public function register()
	{
		$this->load->view('admin/template/auth_header');
        $this->load->view('admin/auth/register');
		$this->load->view('admin/template/auth_footer');
	}

}

?>
