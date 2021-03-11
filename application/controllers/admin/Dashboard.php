<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	// Halaman dashboard
	public function index()
	{
		$data['titles'] = "Dashboard - Pondok Sambal";

		$this->load->view('admin/template/header',$data);
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/template/topbar');
		$this->load->view('admin/dashboard');
		$this->load->view('admin/template/footer');
	}

}

?>
