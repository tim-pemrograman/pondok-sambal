<?php
class MenuPage extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// Load Model
		$this->load->model('category_model');
		$this->load->model('menu_model');
	}
	public function menu()
	{
		$data['categories'] = $this->category_model->get_categories();
		$data['featured_menus'] = $this->menu_model->get_featured_menus();
		$data['cat_menus'] = $this->menu_model->get_menus_by_category(1);
		$data['menus'] = $this->menu_model->get_menus();

		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('menu-mixed', $data);
		$this->load->view('footer');
	}

	

	
}