<?php

class login_model extends CI_Model
{

    public function GetAllLogin()
    {
        $query = $this->db->get('tbl_employee');
        return $query->result_array();
    }

    public function GetEmail($email)
    {
        $query = $this->db->get_where('tbl_employee', ['email' => $email]);
        return $query->row_array();
    }

    public function GetPass($password)
    {
        $query = $this->db->get_where('tbl_employee', ['password' => $password]);
        return $query->row_array();
    }

    public function InsertDtLogin($data_login)  
    {
        $data_login = [
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password')
            // 'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
        ];
        $this->db->insert('tbl_employee', $data_login);
    }

    public function GetNama($employee_id)
    {
        $this->db->select('Fname,Lname');
        $this->db->from('tbl_employee');
        $this->db->where('employee_id', $employee_id);
        $query = $this->db->get();
        // $query = $this->db->get_where('tb_users', ['nik' => $nik]);
        return $query->row_array();
        var_dump($query);
        die;
    }
}
