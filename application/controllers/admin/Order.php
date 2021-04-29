<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        // Load Model
        $this->load->model('order_model');
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
		$employee_id = $this->session->userdata('employee_id');

        $data['data_core'] = $this->login_model->GetNama($employee_id);
        $data['data_order'] = $this->order_model->get_order();

		$data['titles'] = "Order - Pondok Sambal";
        $data['action'] = "edit";

		$this->load->view('admin/template/header',$data);
		$this->load->view('admin/template/sidebar',$data);
		$this->load->view('admin/template/topbar',$data);
		$this->load->view('admin/order/index',$data);
		$this->load->view('admin/template/footer');
	}
    
    public function view($id_order)
	{
        $data['meta_data'] = getSEOData();

        $data['data_core'] = $this->validate();
        $data['data_order'] = $this->order_model->get_order_byid($id_order);

        // var_dump($data['data_order']); 
        // exit;

		$data['titles'] = "Order - Pondok Sambal";

		$this->load->view('admin/template/header',$data);
		$this->load->view('admin/template/sidebar',$data);
		$this->load->view('admin/template/topbar',$data);
		$this->load->view('admin/order/detail',$data);
		$this->load->view('admin/template/footer');
	}

    public function edit()
    {
        $data['data_core'] = $this->validate();

        $data['titles'] = "Manage SEO - Pondok Sambal";
        $data['header'] = "Ubah";

        $this->form_validation->set_rules('meta_key', 'Meta Keyword', 'required');
        $this->form_validation->set_rules('meta_desc', 'Meta Description', 'required');
        
        $data = array(
            'meta_keyword' => $this->input->post('meta_key'),
            'meta_description' => $this->input->post('meta_desc')
        );
        
        // var_dump($data);
        // exit;
        $this->seo_model->edit_seo($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data SEO berhasil diupdate! </div>');
        redirect('admin/seo');
    }

}

?>
