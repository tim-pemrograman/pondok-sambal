<?php
class Ordertaker extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();

		// Load Model
		$this->load->model('category_model');
		$this->load->model('menu_model');
		$this->load->model('cart_model'); // Load our cart model for our entire class
		$this->load->library('cart');
	}
	public function index()
	{	
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
    
}
?>