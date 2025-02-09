<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        // Load Model
        $this->load->model('message_model');
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
        $data['meta_data'] = getSEOData();
		$employee_id = $this->session->userdata('employee_id');

        $data['data_core'] = $this->login_model->GetNama($employee_id);
        $data['data_message'] = $this->message_model->get_messages();

        // var_dump($data['data_message']); exit;

		$data['titles'] = "Message - Pondok Sambal";

		$this->load->view('admin/template/header',$data);
		$this->load->view('admin/template/sidebar',$data);
		$this->load->view('admin/template/topbar',$data);
		$this->load->view('admin/message/index',$data);
		$this->load->view('admin/template/footer');
	}

    public function delete($id)
    {
        $this->message_model->delete_message($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data message berhasil dihapus! </div>');
        redirect('admin/message');
    }

}

?>
