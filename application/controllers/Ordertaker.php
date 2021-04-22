<?php
class Ordertaker extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();

		// Load Model
		$this->load->model('category_model');
		$this->load->model('menu_model');
		$this->load->model('userlogin_model');
		$this->load->model('cart_model'); // Load our cart model for our entire class
		$this->load->library('cart');
	}

	public function index()
	{	
		$user_id = $this->session->userdata('user_id');

        $data['data_core'] = $this->userlogin_model->GetNama($user_id);

        $data['categories'] = $this->category_model->get_categories();
		$data['featured_menus'] = $this->menu_model->get_featured_menus();
		$data['cat_menus'] = $this->menu_model->get_menus_by_category(1);
		$data['menus'] = $this->menu_model->get_menus();
		

        //Load View
		$this->load->helper('url');
		$this->load->view('order-taker/header-order', $data);
		$this->load->view('order-taker/menu-mixed', $data);
		$this->load->view('order-taker/footer-order');
	}

	public function logout()
	{
		$this->session->unset_userdata('user_id');

		$this->session->set_flashdata('message', '<div class="alert alert-success">Logout Berhasil</div>');
		redirect('homepage');
	}
    
}
?>