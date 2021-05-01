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
        $data['data_order'] = $this->order_model->admin_get_order();

		$data['titles'] = "Order - Pondok Sambal";
        $data['action'] = "edit";
        $data['status'] = "-All-";

		$this->load->view('admin/template/header',$data);
		$this->load->view('admin/template/sidebar',$data);
		$this->load->view('admin/template/topbar',$data);
		$this->load->view('admin/order/index',$data);
		$this->load->view('admin/template/footer');
	}

    // Halaman dashboard
	public function filter($filter)
	{
        $data['meta_data'] = getSEOData();
		$employee_id = $this->session->userdata('employee_id');

        $data['data_core'] = $this->login_model->GetNama($employee_id);
        $data['data_order'] = $this->order_model->filter_get_order($filter);

		$data['titles'] = "Order - Pondok Sambal";
        $data['action'] = "edit";

        if($filter == 0){
            $data['status'] = "Belum dibayar";
        }elseif($filter == 2){
            $data['status'] = "Sedang diproses";
        }elseif($filter == 3){
            $data['status'] = "Sedang dijalan";
        }elseif($filter == 4){
            $data['status'] = "Transaksi Selesai";
        }

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
        $data['data_order'] = $this->order_model->admin_get_order_byid($id_order);

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

    public function update_proses($status_type, $id_order)
    {
        
        $data['data_core'] = $this->validate();
        
        // var_dump($data);
        // exit;
        if($status_type == 'proses'){
            $this->order_model->update_proses(2, $id_order);
        }elseif($status_type == 'jalan'){
            $this->order_model->update_proses(3, $id_order);
        }elseif($status_type == 'selesai'){
            $this->order_model->update_proses(4, $id_order);
        }

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data Order berhasil diupdate! </div>');
        redirect('admin/order');
    }

    public function delete($id_order)
    {
        
        $data['data_core'] = $this->validate();
        
        // var_dump($data);
        // exit;
        $this->order_model->delete_order($id_order);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data Order berhasil dihapus! </div>');
        redirect('admin/order');
    }

}

?>
