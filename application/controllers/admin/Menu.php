<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // Load Model
        $this->load->model('login_model');
        $this->load->model('menu_model');
        $this->load->model('category_model');
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

    // Halaman dashboard
    public function index()
    {

        $data['data_core'] = $this->validate();

        $data['menus'] = $this->menu_model->get_menus();

        $data['titles'] = "Menu - Pondok Sambal";

        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/template/topbar', $data);
        $this->load->view('admin/menu/index');
        $this->load->view('admin/template/footer');
    }

    private function validate()
    {
        $employee_id = $this->session->userdata('employee_id');
        $data_core = $this->login_model->GetNama($employee_id);
        return $data_core;
    }

    public function add()
    {
        $data['data_core'] = $this->validate();

        $data['titles'] = "Add New Menu - Pondok Sambal";
        $data['action'] = "add";
        $data['header'] = "Tambah";

        $data['categories'] = $this->category_model->get_categories();

        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('description', 'description');
        $this->form_validation->set_rules('img_path', 'image');
        $this->form_validation->set_rules('price', 'price', 'required');
        $this->form_validation->set_rules('category_id', 'category', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/template/sidebar');
            $this->load->view('admin/template/topbar', $data);
            $this->load->view('admin/menu/form');
            $this->load->view('admin/template/footer');
        } else {
            if (empty($_FILES['img_path']['name'])) {
                $data = array(
                    'name' => $this->input->post('name'),
                    'description' => $this->input->post('description'),
                    'price' => $this->input->post('price'),
                    // 'rating' => $this->input->post('rating'),
                    'category_id' => $this->input->post('category_id')
                );
            } else {
                $upload_image = $this->upload_image();
                $data = array(
                    'name' => $this->input->post('name'),
                    'description' => $this->input->post('description'),
                    'product_img' => $upload_image,
                    'price' => $this->input->post('price'),
                    // 'rating' => $this->input->post('rating'),
                    'category_id' => $this->input->post('category_id')
                );
            }
            // var_dump($data);
            $this->menu_model->add_menu($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data kategori berhasil ditambah!</div>');
            redirect('admin/menu');
        }
    }

    private function upload_image()
    {
        $config['upload_path'] = './assets/images/menu/';
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
        $data['data_core'] = $this->validate();

        $data['menu'] = $this->menu_model->get_menu_by_id($id);
        $data['categories'] = $this->category_model->get_categories();

        $data['titles'] = "Edit Menu - Pondok Sambal";
        $data['action'] = "edit";
        $data['header'] = "Ubah";

        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('description', 'description');
        $this->form_validation->set_rules('img_path', 'image');
        $this->form_validation->set_rules('price', 'price', 'required');
        $this->form_validation->set_rules('category_id', 'category', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/template/sidebar');
            $this->load->view('admin/template/topbar', $data);
            $this->load->view('admin/menu/form');
            $this->load->view('admin/template/footer');
        } else {

            if (empty($_FILES['img_path']['name'])) {
                $data = array(
                    'name' => $this->input->post('name'),
                    'description' => $this->input->post('description'),
                    'price' => $this->input->post('price'),
                    // 'rating' => $this->input->post('rating'),
                    'category_id' => $this->input->post('category_id')
                );
            } else {
                $upload_image = $this->upload_image();
                $data = array(
                    'name' => $this->input->post('name'),
                    'description' => $this->input->post('description'),
                    'product_img' => $upload_image,
                    'price' => $this->input->post('price'),
                    // 'rating' => $this->input->post('rating'),
                    'category_id' => $this->input->post('category_id')
                );
            }
            // var_dump($data);
            $this->menu_model->edit_menu($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data kategori berhasil diupdate! </div>');
            redirect('admin/menu');
        }
    }

    public function submit_edit()
    {
    }

    public function delete($id)
    {
        $this->menu_model->delete_menu($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data kategori berhasil dihapus! </div>');
        redirect('admin/menu');
    }
}
