<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        // Load Model
        $this->load->model('article_model');
        $this->load->model('login_model');
        $this->load->library('form_validation');

        // cek_login();
        if (!$this->session->userdata('employee_id')) {
            redirect('admin/auth');
        } else {
			// // cek role
            // if ($this->session->userdata('id_posisi') != "4") {
            //     redirect('auth/blocked');
            // }
        }

	}

    private function validate()
    {
        $employee_id = $this->session->userdata('employee_id');
        $data_core = $this->login_model->GetNama($employee_id);
        return $data_core;
    }

	// Halaman dashboard
	public function index()
	{
        $data['meta_data'] = getSEOData();
		$data['data_core'] = $this->validate();

		$data['titles'] = "Article - Pondok Sambal";
        $data['articles'] = $this->article_model->get_articles();

		$this->load->view('admin/template/header',$data);
		$this->load->view('admin/template/sidebar',$data);
		$this->load->view('admin/template/topbar',$data);
		$this->load->view('admin/article/index');
		$this->load->view('admin/template/footer');
	}

    public function view($id)
    {
        $data['meta_data'] = getSEOData();
        $data['data_core'] = $this->validate();

		$data['titles'] = "Article - Pondok Sambal";
        $data['article'] = $this->article_model->get_article_by_id($id);

		$this->load->view('admin/template/header',$data);
		$this->load->view('admin/template/sidebar',$data);
		$this->load->view('admin/template/topbar',$data);
		$this->load->view('admin/article/detail');
		$this->load->view('admin/template/footer');
    }

    public function add()
    {
        $data['meta_data'] = getSEOData();
        $data['data_core'] = $this->validate();

        $data['titles'] = "Article - Pondok Sambal";
        $data['action'] = "add";
        $data['header'] = "Tambah";

        $this->form_validation->set_rules('title', 'title', 'required');
        $this->form_validation->set_rules('content', 'content', 'required');
        $this->form_validation->set_rules('img_path', 'image');

        $this->load->helper('date');
        date_default_timezone_set('Asia/Jakarta');
        $now = date('Y-m-d H:i:s');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/template/sidebar',$data);
            $this->load->view('admin/template/topbar', $data);
            $this->load->view('admin/article/form');
            $this->load->view('admin/template/footer');
        } else {
            if (empty($_FILES['img_path']['name'])) {
                $data = array(
                    'title' => $this->input->post('title'),
                    'content' => $this->input->post('content'),
                    'created_at' => $now,
                    'employee_id' => $this->session->userdata('employee_id')
                );
            } else {
                $upload_image = $this->upload_image();
                $data = array(
                    'title' => $this->input->post('title'),
                    'content' => $this->input->post('content'),
                    'img_path' => $upload_image,
                    'created_at' => $now,
                    'employee_id' => $this->session->userdata('employee_id')
                );
            }
            // var_dump($data);
            $this->article_model->add_article($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data kategori berhasil ditambah!</div>');
            redirect('admin/article');
        }
    }

    private function upload_image()
    {
        $config['upload_path'] = './assets/images/article/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 10000;

        $this->load->library('upload', $config);

        // return $config;
        if (!$this->upload->do_upload('img_path')) {
            $error = array('error' => $this->upload->display_errors());
            return $error;
        } else {
            $data = array('upload_data' => $this->upload->data());
            // $type = explode('.', $_FILES['img_path']['name']);
            // $type = $type[count($type) - 1];

            $path = $config['upload_path'] . $data["upload_data"]["file_name"];
            return ($data == true) ? $path : false;
        }
    }

    public function edit($id)
    {
        $data['meta_data'] = getSEOData();
        $data['data_core'] = $this->validate();

        $data['article'] = $this->article_model->get_article_by_id($id);

        $data['titles'] = "Article - Pondok Sambal";
        $data['action'] = "edit";
        $data['header'] = "Ubah";

        $this->form_validation->set_rules('title', 'title', 'required');
        $this->form_validation->set_rules('content', 'content', 'required');
        $this->form_validation->set_rules('img_path', 'image');
        
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/template/sidebar',$data);
            $this->load->view('admin/template/topbar', $data);
            $this->load->view('admin/article/form');
            $this->load->view('admin/template/footer');
        } else {

            if (empty($_FILES['img_path']['name'])) {
                $data = array(
                    'title' => $this->input->post('title'),
                    'content' => $this->input->post('content')
                );
            } else {
                $upload_image = $this->upload_image();
                $data = array(
                    'title' => $this->input->post('title'),
                    'content' => $this->input->post('content'),
                    'img_path' => $upload_image
                );
            }
            // var_dump($data);
            $this->article_model->edit_article($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data kategori berhasil diupdate! </div>');
            redirect('admin/article');
        }
    }

    public function delete($id)
    {
        $this->article_model->delete_article($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data artikel berhasil dihapus! </div>');
        redirect('admin/article');
    }

    public static function slugify($text)
    {
        // replace non letter or digits by -
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);

        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        // trim
        $text = trim($text, '-');

        // remove duplicate -
        $text = preg_replace('~-+~', '-', $text);

        // lowercase
        $text = strtolower($text);

        if (empty($text)) {
            return 'n-a';
        }

        return $text;
    }

}

?>
