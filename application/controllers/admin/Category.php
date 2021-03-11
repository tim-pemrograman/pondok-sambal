<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        // Load Model
        // $this->load->model('category_model');
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

	// Halaman dashboard
	public function index()
	{
		$employee_id = $this->session->userdata('employee_id');

        $data['data_core'] = $this->login_model->GetNama($employee_id);
		$data['titles'] = "Category - Pondok Sambal";

		$this->load->view('admin/template/header',$data);
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/template/topbar',$data);
		$this->load->view('admin/category/index');
		$this->load->view('admin/template/footer');
	}

}

?>
