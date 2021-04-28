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
		$this->load->view('articles/list', $data);
		$this->load->view('footer');
    }

	public function detail($id) {
		$data['article'] = $this->article_model->get_article_by_id($id);
		$this->article_model->view_article($id);
		
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('articles/detail', $data);
		$this->load->view('footer');
	}

	// public function read_article($id) {
		
	// }
        
}