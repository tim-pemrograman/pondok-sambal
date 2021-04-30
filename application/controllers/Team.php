<?php
class Team extends CI_Controller
{
	public function member()
	{	
		$data['title_head'] = "Tim Pondok Sambal";
		$data['meta_data'] = getSEOData();

		$this->load->helper('url');
		$this->load->view('header',$data);
		$this->load->view('meet-the-team');
		$this->load->view('footer');
	}
    
}