<?php
class Aboutpage extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// Load Model
		$this->load->model('gallery_model');
		$this->load->model('message_model');
	}
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
			$this->load->helper('url');
			$this->load->view('header');
			$this->load->view('contact-page');
			$this->load->view('footer');
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
			//  var_dump($data);
            $this->message_model->add_message($data);
            $this->session->set_flashdata('message', '<div style="background:#93ffdf; padding: 10px 20px; color:black;border:5px" role="alert">Pesan Anda telah berhasil ditambah!</div>');
            redirect('aboutpage/contact');
        }
    }

	public function gallery3nc()
	{
		$data['galleries'] = $this->gallery_model->get_galleries();

		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('gallery-3-columns-without-caption', $data);
		$this->load->view('footer');
	}
}
