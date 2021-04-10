<?php
class LoginPage extends CI_Controller
{
	public function login()
	{
        $this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if ($this->form_validation->run() ==  false) {
			$data['titles'] = "Login - Pondok Sambal";
			
			$this->load->helper('url');
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

}

?>

