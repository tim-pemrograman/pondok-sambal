<?php
class Homepage extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// Load Model
		$this->load->model('banner_model');
		$this->load->model('gallery_model');
	}
	public function index()
	{
		$data['banners'] = $this->banner_model->get_banners();
		$data['galleries'] = $this->gallery_model->get_galleries();

		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('homepage', $data);
		$this->load->view('footer');
	}
}
