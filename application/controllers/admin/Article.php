<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {

	// Halaman dashboard
	public function index()
	{
		$data['titles'] = "Article - Pondok Sambal";

		$this->load->view('admin/template/header',$data);
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/template/topbar');
		$this->load->view('admin/article/index');
		$this->load->view('admin/template/footer');
	}

}

?>
