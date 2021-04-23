<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // Load Model
        // $this->load->model('category_model');
        $this->load->model('login_model');
        $this->load->model('category_model');
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

    public function index()
    {
        $data['meta_data'] = getSEOData();
        $data['data_core'] = $this->validate();

        $data['categories'] = $this->category_model->get_categories();

        $data['titles'] = "Category - Pondok Sambal";

        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/template/topbar', $data);
        $this->load->view('admin/category/index');
        $this->load->view('admin/template/footer');
    }

    public function add()
    {
        $data['meta_data'] = getSEOData();
        $data['data_core'] = $this->validate();

        $data['titles'] = "Add New Category - Pondok Sambal";

        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('description', 'description');
        $this->form_validation->set_rules('img_path', 'image');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/template/sidebar');
            $this->load->view('admin/template/topbar', $data);
            $this->load->view('admin/category/form');
            $this->load->view('admin/template/footer');
        } else {
            if (empty($_FILES['img_path']['name'])) {
                $data = array(
                    'name' => $this->input->post('name'),
                    'description' => $this->input->post('description')
                );
            } else {
                $upload_image = $this->upload_image();
                $data = array(
                    'name' => $this->input->post('name'),
                    'description' => $this->input->post('description'),
                    'category_img' => $upload_image
                );
            }
            // var_dump($data);
            $this->category_model->add_category($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data kategori berhasil ditambah!</div>');
            redirect('admin/category');
        }
    }

    private function upload_image()
    {
        $config['upload_path'] = './assets/images/category/';
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

        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('description', 'description');
        $this->form_validation->set_rules('img_path', 'image');

        if ($this->form_validation->run() === FALSE) {
            redirect('admin/banner');
        } else {

            if (empty($_FILES['img_path']['name'])) {
                $data = array(
                    'name' => $this->input->post('name'),
                    'description' => $this->input->post('description')
                );
            } else {
                $upload_image = $this->upload_image();
                $data = array(
                    'name' => $this->input->post('name'),
                    'description' => $this->input->post('description'),
                    'category_img' => $upload_image
                );
            }
            // var_dump($data);
            $this->category_model->edit_category($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data kategori berhasil diupdate! </div>');
            redirect('admin/category');
        }
    }

    public function delete($id)
    {
        $this->category_model->delete_category($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data kategori berhasil dihapus! </div>');
        redirect('admin/category');
    }
}
