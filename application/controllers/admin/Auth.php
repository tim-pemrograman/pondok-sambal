<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		// Load url helper
		$this->load->model('login_model');
		// $this->load->model('role_model');
		// $this->load->model('user_model');
		$this->load->library('form_validation');
		
	}

	// Halaman dashboard
	public function index()
	{
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if ($this->form_validation->run() ==  false) {
			$data['titles'] = "Login - Pondok Sambal";
			
			$this->load->view('admin/template/auth_header',$data);
			$this->load->view('admin/auth/login');
			$this->load->view('admin/template/auth_footer');
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

	public function register()
	{
		$this->load->view('admin/template/auth_header');
        $this->load->view('admin/auth/register');
		$this->load->view('admin/template/auth_footer');
	}

	public function logout()
	{
		$this->session->unset_userdata('employee_id');

		$this->session->set_flashdata('message', '<div class="alert alert-success">Logout Berhasil</div>');
		redirect('admin/auth');
	}

	public function blocked()
	{
		$data['titles'] = "403 Forbidden - Keanggotaan";
		$this->load->view('auth/blocked');
	}

	public function notfound()
	{
		$data['titles'] = "404 Not Found - Pondok Sambal";
		$this->load->view('admin/404');
	}

}

?>
