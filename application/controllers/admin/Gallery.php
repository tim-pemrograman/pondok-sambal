<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gallery extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // Load Model
        $this->load->model('login_model');
        $this->load->model('gallery_model');
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
        $data['data_core'] = $this->validate();

        $data['galleries'] = $this->gallery_model->get_galleries();

        $data['titles'] = "Gallery - Pondok Sambal";

        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/template/topbar', $data);
        $this->load->view('admin/gallery/index');
        $this->load->view('admin/template/footer');
    }

    public function add()
    {
        $data['data_core'] = $this->validate();

        $data['titles'] = "Add Gallery - Pondok Sambal";

        if (empty($_FILES['img_path']['name'])) {
            $this->form_validation->set_rules('img_path', 'image', 'required');
        }

        if ($this->form_validation->run() === FALSE && empty($_FILES['img_path']['name'])) {
            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/template/sidebar');
            $this->load->view('admin/template/topbar', $data);
            $this->load->view('admin/gallery/form');
            $this->load->view('admin/template/footer');
        } else {
            $upload_image = $this->upload_image();
            $data = array(
                'img_path' => $upload_image,
                'img_alt' => $this->input->post('img_alt')
            );
            // var_dump($upload_image);
            $this->gallery_model->add_gallery($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data gallery berhasil ditambah!</div>');
            redirect('admin/gallery');
        }
    }

    private function upload_image()
    {
        $config['upload_path'] = './assets/images/gallery/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 10000;

        $this->load->library('upload', $config);

        // return $config;
        if (!$this->upload->do_upload('img_path')) {
            $error = array('error' => $this->upload->display_errors());
            return $error;
        } else {
            $data = array('upload_data' => $this->upload->data());

            $path = $config['upload_path'] . $data["upload_data"]["file_name"];
            return ($data == true) ? $path : false;
        }
    }

    public function edit()
    {
        // $data['data_core'] = $this->validate();

        // $data['titles'] = "Gallery - Pondok Sambal";

        $this->form_validation->set_rules('id_gallery', 'Id gallery', 'required');

        $this->form_validation->set_rules('img_alt', 'Image Description');
        if ($this->form_validation->run() === FALSE) {
            redirect('admin/gallery');
            var_dump($this->input->post('img_alt'));
        } else {

            $this->gallery_model->edit_gallery();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data gallery berhasil diupdate! </div>');
            redirect('admin/gallery');
        }
    }

    public function delete($id)
    {
        $this->gallery_model->delete_gallery($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data gallery berhasil dihapus! </div>');
        redirect('admin/gallery');
    }
}
