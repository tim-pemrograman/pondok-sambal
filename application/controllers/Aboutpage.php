<?php
class Aboutpage extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// Load Model
		$this->load->model('company_model');
		$this->load->model('message_model');
		$this->load->model('gallery_model');
		$this->load->model('article_model');
	}
	public function about()
	{
		$data['recent_articles'] = $this->article_model->get_recent();
		$data['page'] = 'about';

		$data['title_head'] = "Mengenai Pondok Sambal";
		$data['meta_data'] = getSEOData();

		$data['company'] = $this->company_model->get_company();

		$this->load->helper('url');
		$this->load->view('header',$data);
		$this->load->view('about-us',$data);
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
		$data['recent_articles'] = $this->article_model->get_recent();
		$data['page'] = 'contact';
		$data['title_head'] = "Hubungki Kami - Pondok Sambal";
		$data['meta_data'] = getSEOData();

		$this->load->helper('url');
		$this->load->view('header',$data);
		$this->load->view('contact-page');
		$this->load->view('footer');
	}

	public function sendMessage()
    {
		$this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('phone', 'phone', 'required');
        $this->form_validation->set_rules('review', 'review');
        $this->form_validation->set_rules('rasa', 'rasa');
        $this->form_validation->set_rules('nyaman', 'nyaman');
        $this->form_validation->set_rules('ramai', 'ramai');
        $this->form_validation->set_rules('layanan', 'layanan');

        $this->load->helper('date');
        date_default_timezone_set('Asia/Jakarta');
        $now = date('Y-m-d H:i:s');

        if ($this->form_validation->run() === FALSE) {
			redirect('aboutpage/contact');
		} else {
			$data = array(
				'email' => $this->input->post('email'),
				'phone' => $this->input->post('phone'),
				'review' => $this->input->post('review'),
				'r_rasa' => (int)$this->input->post('rasa'),
				'r_sambal' => (int)$this->input->post('sambal'),
				'r_kenyamanan' => (int)$this->input->post('nyaman'),
				'r_keramaian' => (int)$this->input->post('ramai'),
				'r_pelayanan' => (int)$this->input->post('layanan'),
				'date_submitted' => $now
			 );
			 $data_ml = array(
				 'rasa_n' => (int)$this->input->post('rasa'),
				 'sambal_n' => (int)$this->input->post('sambal'),
				 'kenyamanan_n' => (int)$this->input->post('nyaman'),
				 'keramaian_n' => (int)$this->input->post('ramai'),
				 'pelayanan_n' => (int)$this->input->post('layanan')
				);
			// 0 -> Bagus
			// 1-> Buruk
			// 2 -> Netral
			foreach ($data_ml as $key => &$value) {
				switch($value){
					case 1:
						$value = 1;
						break;
					case 2:
						$value = 1;
						break;
					case 3:
						$value = 2;
						break;
					case 4:
						$value = 0;
						break;
					case 5:
						$value = 0;
						break;
					default:
						$value = 2;
				}
			}

			$send_data = array($data_ml);
            $last_messageid = $this->message_model->add_message($data);
			$data_sentiment = $this->message_model->analyse_sentiment($send_data);
			// Filter out value of return that doesn't numeric
			$sentiment_val = (int)filter_var(json_decode($data_sentiment)->prediction, FILTER_SANITIZE_NUMBER_INT);

			// Get Return Sentiment from API Machine Learning
			$data_return_sentiment = array(
				'sentiment' => $sentiment_val,
				'message_id' => $last_messageid
			);
			$this->message_model->addSentiment($data_return_sentiment);
            $this->session->set_flashdata('message', '<div style="background:#93ffdf; padding: 10px 20px; color:black;border:5px" role="alert">Pesan Anda telah berhasil ditambah!</div>');
            redirect('aboutpage/contact');
        }
    }

	public function gallery3nc()
	{
		$data['recent_articles'] = $this->article_model->get_recent();
		$data['page'] = 'gallery';
		$data['title_head'] = "Galeri Pondok Sambal";
		$data['meta_data'] = getSEOData();
		$data['galleries'] = $this->gallery_model->get_galleries();

		$this->load->helper('url');
		$this->load->view('header',$data);
		$this->load->view('gallery-3-columns-without-caption', $data);
		$this->load->view('footer');
	}
}
