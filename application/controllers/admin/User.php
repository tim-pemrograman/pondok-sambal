<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	// Halaman dashboard
	public function index()
	{
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/template/topbar');
		$this->load->view('admin/dashboard');
		$this->load->view('admin/template/footer');
	}

}

?>
