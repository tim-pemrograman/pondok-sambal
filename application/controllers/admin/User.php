<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        // Load Model
        $this->load->model('user_model');
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
		$data['titles'] = "Employee List - Pondok Sambal";

        $data['data_users'] = $this->user_model->get_users();
        // var_dump($data['data_users']);
        // exit;

		$this->load->view('admin/template/header',$data);
		$this->load->view('admin/template/sidebar',$data);
		$this->load->view('admin/template/topbar',$data);
		$this->load->view('admin/user/index',$data);
		$this->load->view('admin/template/footer');
	}

    public function add()
	{
        $data['meta_data'] = getSEOData();
        $data['data_core'] = $this->validate();

        $data['titles'] = "Employee List - Pondok Sambal";
        $data['action'] = "add";
        $data['header'] = "Tambah";

        $this->form_validation->set_rules('fname', 'First Name', 'required');
        $this->form_validation->set_rules('lname', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');

        // Cek Pasword dan Confirm Password
        $this->form_validation->set_rules('password', 'Password', 'matches[confirmpassword]');
        $this->form_validation->set_rules('confirmpassword', 'Confirm Password', 'matches[confirmpassword]');

        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('admin/template/header',$data);
            $this->load->view('admin/template/sidebar',$data);
            $this->load->view('admin/template/topbar',$data);
            $this->load->view('admin/user/form');
            $this->load->view('admin/template/footer');
        } else {
            $data = array(
                'fname' => $this->input->post('fname'),
                'lname' => $this->input->post('lname'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),
                'phone' => $this->input->post('phone'),
                'address' => $this->input->post('address')
            );
            // var_dump($data);
            // exit;
            $this->user_model->add_users($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data User berhasil ditambah!</div>');
            redirect('admin/user');
        }

		
	}

    public function edit($id)
    {
        $data['meta_data'] = getSEOData();
        $data['data_core'] = $this->validate();

        $data['data_user'] = $this->user_model->get_employee_by_id($id);

        $data['titles'] = "Employee List - Pondok Sambal";
        $data['action'] = "edit";
        $data['header'] = "Ubah";

        $this->form_validation->set_rules('fname', 'First Name', 'required');
        $this->form_validation->set_rules('lname', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');

        // control dlu untuk confirm password nya 
        $this->form_validation->set_rules('password', 'Password', 'matches[confirmpassword]' );
        $this->form_validation->set_rules('confirmpassword', 'Confirm Password', 'matches[password]');


        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/template/sidebar',$data);
            $this->load->view('admin/template/topbar', $data);
            $this->load->view('admin/user/form');
            $this->load->view('admin/template/footer');
        } else {
            
            if($this->input->post('password') == ''){
                $data = array(
                    'fname' => $this->input->post('fname'),
                    'lname' => $this->input->post('lname'),
                    'email' => $this->input->post('email'),
                    'phone' => $this->input->post('phone'),
                    'address' => $this->input->post('address')
                );
            }else{
                $data = array(
                    'fname' => $this->input->post('fname'),
                    'lname' => $this->input->post('lname'),
                    'email' => $this->input->post('email'),
                    'password' => $this->input->post('password'),
                    'phone' => $this->input->post('phone'),
                    'address' => $this->input->post('address')
                );
            }
            
            // var_dump($data);
            // exit;
            $this->user_model->edit_user($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data User berhasil diupdate! </div>');
            redirect('admin/user');
        }
    }

    public function delete($id)
    {
        $this->user_model->delete_user($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data user berhasil dihapus! </div>');
        redirect('admin/user');
    }


}

?>
