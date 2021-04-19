<?php
class Article extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// Load Model
		$this->load->model('article_model');
	}
	
    public function index()
	{	
		$data['articles'] = $this->article_model->get_articles();
		
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('article', $data);
		$this->load->view('footer');
    }
        
}