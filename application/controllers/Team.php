<?php
class Team extends CI_Controller
{
	public function member()
	{	
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('meet-the-team');
		$this->load->view('footer');
	}
    
}