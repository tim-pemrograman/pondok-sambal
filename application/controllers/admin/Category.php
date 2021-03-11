<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	// Halaman dashboard
	public function index()
	{
		$data['titles'] = "Category - Pondok Sambal";

		$this->load->view('admin/template/header',$data);
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/template/topbar');
		$this->load->view('admin/category/index');
		$this->load->view('admin/template/footer');
	}

}

?>
