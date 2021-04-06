<?php
class MenuPage extends CI_Controller
{
	public function menu()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('menu-mixed');
		$this->load->view('footer');
	}

	

	
}