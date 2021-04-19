<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class LoginPage extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		// Load url helper
		$this->load->model('login_model');
		$this->load->model('signup_model');
		// $this->load->model('role_model');
		// $this->load->model('user_model');
		$this->load->library('form_validation');
		
	}

	public function login()
	{
        $this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if ($this->form_validation->run() ==  false) {
			$data['titles'] = "Login - Pondok Sambal";
			

		    $this->load->view('login');
	
		} else {
			$this->_login();
		}
		
	}
    private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');


		$user = $this->login_model->GetEmail($email);
		$password = $this->login_model->GetPass($password);

		// Cek User
		if ($user && $password) {

			$role = [
				'employee_id' => $user['employee_id']
			];
			// Simpan Role ke session
			$this->session->set_userdata($role);

			redirect('Homepage');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger">Email Tidak Di Temukan !, Periksa Kembali</div>');
			redirect('loginpage/login');
			
		}
	}

	public function signup()
	{
		// Cek User
		$email = $this->input->post('email');


		$user = $this->signup_model->GetEmail($email);
	
			if ($user && $email) {
				$this->session->set_flashdata('message', '<div>Email anda telah terpakai,Periksa Kembali</div>');
				// $this->session->set_flashdata('message', '<div class="alert alert-danger">Akun berhasil dibuat!, Silahkan login</div>');
				redirect('loginpage/login');
			} else {
		
			$this->_signup();
			}
		
	}

	private function _signup()
	{
		
				
		$data_acc = [

			'Fname' => $this->input->post('Fname'),
			'Lname' => $this->input->post('Lname'),
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password'),
			'phone' => $this->input->post('phone'),
			'address' => $this->input->post('address')
			
		];
		 $this->signup_model->InsertDtAcc($data_acc);
		 $this->session->set_flashdata('message', '<div class="alert alert-danger">Akun berhasil dibuat!, Silahkan login</div>');
		 redirect('loginpage/login');
	
}

	public function logout()
	{
		$this->session->unset_userdata('employee_id');

		$this->session->set_flashdata('message', '<div class="alert alert-success">Logout Berhasil</div>');
		redirect('admin/auth');
	}

}

?>

