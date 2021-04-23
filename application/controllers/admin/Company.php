<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        // Load Model
        $this->load->model('company_model');
        $this->load->model('login_model');
        $this->load->model('company_model');
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

    private function upload_gallery_image()
    {
        $config['upload_path'] = './assets/images/company/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 10000;

        $this->load->library('upload', $config);

        // return $config;
        if (!$this->upload->do_upload('gallery_img')) {
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
    
    private function upload_banner_image()
    {
        $config['upload_path'] = './assets/images/company/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 10000;

        $this->load->library('upload', $config);

        // return $config;
        if (!$this->upload->do_upload('banner_img')) {
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
        
        $employee_id = $this->session->userdata('employee_id');

        $data['data_core'] = $this->login_model->GetNama($employee_id);
        $data['data_company'] = $this->company_model->get_company();

		$data['titles'] = "Company - Pondok Sambal";

		$this->load->view('admin/template/header',$data);
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/template/topbar');
		$this->load->view('admin/company/index',$data);
		$this->load->view('admin/template/footer');
	}

    public function edit()
    {
        $data['data_core'] = $this->validate();

        $this->form_validation->set_rules('img_path', 'image');

        $data['titles'] = "Edit Article - Pondok Sambal";
        $data['header'] = "Ubah";

        $this->form_validation->set_rules('name', 'company name', 'required');
        $this->form_validation->set_rules('about', 'company about', 'required');
        $this->form_validation->set_rules('email', 'company email', 'required');
        $this->form_validation->set_rules('address', 'company address', 'required');
        $this->form_validation->set_rules('phone', 'company phone', 'required');
        $this->form_validation->set_rules('gallery_img', 'image');
        $this->form_validation->set_rules('banner_img', 'image');

        if (empty($_FILES['gallery_img']['name']) && empty($_FILES['banner_img']['name'])) {
            $data = array(
                'name' => $this->input->post('name'),
                'about' => $this->input->post('about'),
                'email' => $this->input->post('email'),
                'address' => $this->input->post('address'),
                'phone' => $this->input->post('phone')
            );
        } else {
            $gallery_image = $this->upload_gallery_image();
            $banner_image = $this->upload_banner_image();
            $data = array(
                'name' => $this->input->post('name'),
                'about' => $this->input->post('about'),
                'email' => $this->input->post('email'),
                'address' => $this->input->post('address'),
                'phone' => $this->input->post('phone'),
                'gallery_image' => $gallery_image,
                'banner_image' => $banner_image
            );
        }
        // var_dump($data);
        // exit;
        $this->company_model->edit_company($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data kategori berhasil diupdate! </div>');
        redirect('admin/company');


    }

}

?>
