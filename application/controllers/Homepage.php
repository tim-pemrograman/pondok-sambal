<?php
class Homepage extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// Load Model
		$this->load->model('banner_model');
		$this->load->model('gallery_model');
		$this->load->model('menu_model');
		$this->load->model('Userlogin_model');
		$this->load->library('form_validation');

		// // cek_login();
        // if (!$this->session->userdata('user_id')) {
        //     redirect('loginpage/login');
        // } else {
		// 	// // cek role
        //     // if ($this->session->userdata('id_posisi') != "4") {
        //     //     redirect('auth/blocked');
        //     // }
        // }
	}
	public function index()
	{
		$user_id = $this->session->userdata('user_id');
		$data['banners'] = $this->banner_model->get_banners();
		$data['galleries'] = $this->gallery_model->get_galleries();
		$data['featured_menus'] = $this->menu_model->get_featured_menus();
		$data['data_core'] = $this->Userlogin_model->GetNama($user_id);

		$this->load->helper('url');
		$this->load->view('header', $data);
		$this->load->view('homepage', $data);
		$this->load->view('footer');
	}

	public function logout()
	{
		$this->session->unset_userdata('user_id');

		$this->session->set_flashdata('message', '<div class="alert alert-success">Logout Berhasil</div>');
		redirect('homepage/');
	}
}
