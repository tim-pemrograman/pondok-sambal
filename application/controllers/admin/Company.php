<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller {

	// Halaman dashboard
	public function index()
	{
		$data['titles'] = "Company - Pondok Sambal";

		$this->load->view('admin/template/header',$data);
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/template/topbar');
		$this->load->view('admin/company/index');
		$this->load->view('admin/template/footer');
	}

}

?>
