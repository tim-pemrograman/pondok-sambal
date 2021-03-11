<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	// Halaman Product
	public function index()
	{
		$data['titles'] = "Product - Pondok Sambal";

		$this->load->view('admin/template/header',$data);
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/template/topbar');
		$this->load->view('admin/product/index');
		$this->load->view('admin/template/footer');
	}

}

?>
