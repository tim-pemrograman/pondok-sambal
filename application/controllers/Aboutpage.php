<?php
class Aboutpage extends CI_Controller
{
	public function about()
	{	
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('about-us');
		$this->load->view('footer');
	}
	// public function testi()
	// {	
	// 	$this->load->helper('url');
	// 	$this->load->view('header');
	// 	$this->load->view('testimonial');
	// 	$this->load->view('footer');
	// }
	public function contact()
	{	
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('contact-page');
		$this->load->view('footer');
	}
	public function gallery3nc()
	{	
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('gallery-3-columns-without-caption');
		$this->load->view('footer');
	}
    
}