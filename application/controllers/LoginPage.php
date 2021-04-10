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

			redirect('admin/Dashboard');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger">Email Tidak Di Temukan !, Periksa Kembali</div>');
			redirect('admin/auth');
			
		}
	}

	function signup()
	{
		$Fname=$_POST['Fname'];
		$Lname=$_POST['Lname'];
		$phone=$_POST['phone'];
		$address=$_POST['address'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$count=$this->model->check_user($email);
			if($count > 0){
				echo 'This User Already Exists';
				}
			else{
				$data = array(
					'employee_id' =>null,
					'Fname' =>$_POST['Fname'],
					'Lname' =>$_POST['Lname'],
					'phone' =>$_POST['phone'],
					'address' =>$_POST['address'],
					'email' =>$_POST['email'],
					'password' =>$_POST['password']
					);
					$this->model->insert_user($data);
				}
	}

	public function logout()
	{
		$this->session->unset_userdata('employee_id');

		$this->session->set_flashdata('message', '<div class="alert alert-success">Logout Berhasil</div>');
		redirect('admin/auth');
	}

}

?>

