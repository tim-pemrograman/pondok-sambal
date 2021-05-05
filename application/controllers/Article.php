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
		$data['recent_articles'] = $this->article_model->get_recent();
		$data['page'] = 'article';

		$data['title_head'] = "Artikel Pondok Sambal";
		$data['meta_data'] = getSEOData();

		$data['articles'] = $this->article_model->get_articles();

		$this->load->helper('url');
		$this->load->view('header', $data);
		$this->load->view('articles/list', $data);
		$this->load->view('footer');
    }

	public function detail($id) 
	{
		$data['recent_articles'] = $this->article_model->get_recent();
		$data['page'] = 'article';

		$data['meta_data'] = getSEOData();
		
		$data['article'] = $this->article_model->get_article_by_id($id);
		$data['title_head'] = $data['article']->title;
		$this->article_model->view_article($id);
		$this->load->helper('url');
		$this->load->view('header',$data);
		$this->load->view('articles/detail', $data);
		$this->load->view('footer');
	}

	// public function read_article($id) {
		
	// }
        
}