<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Banner extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // Load Model
        // $this->load->model('article_model');
        $this->load->model('login_model');
        $this->load->model('banner_model');
        $this->load->library('form_validation');

        // cek_login();
        if (!$this->session->userdata('employee_id')) {
            redirect('admin/auth');
        } else {
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

        $data['banners'] = $this->banner_model->get_banners();

        $data['titles'] = "Banner - Pondok Sambal";

        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/template/topbar', $data);
        $this->load->view('admin/banner/index', $data);
        $this->load->view('admin/template/footer');
    }

    public function add()
    {
        $data['meta_data'] = getSEOData();
        $data['data_core'] = $this->validate();

        $data['titles'] = "Banner - Pondok Sambal";

        if (empty($_FILES['img_path']['name'])) {
            $this->form_validation->set_rules('img_path', 'image', 'required');
        }
        $this->form_validation->set_rules('title', 'title', 'required');
        $this->form_validation->set_rules('subtitle', 'subtitle', 'required');
        $this->form_validation->set_rules('img_alt', 'image description');

        if ($this->form_validation->run() === FALSE && empty($_FILES['img_path']['name'])) {
            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/template/sidebar');
            $this->load->view('admin/template/topbar', $data);
            $this->load->view('admin/banner/form');
            $this->load->view('admin/template/footer');
        } else {
            $upload_image = $this->upload_image();
            $data = array(
                'img_path' => $upload_image,
                'title' => $this->input->post('title'),
                'subtitle' => $this->input->post('subtitle'),
                'img_alt' => $this->input->post('img_alt')
            );
            // var_dump($upload_image);
            $this->banner_model->add_banner($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data banner berhasil ditambah!</div>');
            redirect('admin/banner');
        }
    }

    private function upload_image()
    {
        $config['upload_path'] = './assets/images/banner/';
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

    public function edit()
    {
        // $data['data_core'] = $this->validate();

        // $data['titles'] = "Banner - Pondok Sambal";

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('subtitle', 'Subtitle', 'required');
        $this->form_validation->set_rules('img_alt', 'Image Description');
        $this->form_validation->set_rules('img_path', 'Image Description');

        if ($this->form_validation->run() === FALSE) {
            redirect('admin/banner');
        } else {

            $this->banner_model->edit_banner();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data banner berhasil diupdate! </div>');
            redirect('admin/banner');
        }
    }

    public function delete($id)
    {
        $this->banner_model->delete_banner($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data banner berhasil dihapus! </div>');
        redirect('admin/banner');
    }
}
