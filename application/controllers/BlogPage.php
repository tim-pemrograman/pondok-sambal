<?php
class BlogPage extends CI_Controller
{
	
    public function blog4()
	{	
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('blog-4-columns');
		$this->load->view('footer');
    }
        
}