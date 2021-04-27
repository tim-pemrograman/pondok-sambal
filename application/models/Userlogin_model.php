<?php

class Userlogin_model extends CI_Model
{

    public function GetAllLogin()
    {
        $query = $this->db->get('tbl_user');
        return $query->result_array();
    }

    public function GetEmail($email)
    {
        $query = $this->db->get_where('tbl_user', ['email' => $email]);
        return $query->row_array();
    }

    public function GetPass($password)
    {
        $query = $this->db->get_where('tbl_user', ['password' => $password]);
        return $query->row_array();
    }

    public function GetId($Id)
    {
        $query = $this->db->get_where('tbl_user', ['id' => $Id]);
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

    public function GetNama($user_id)
    {
        $this->db->select('Fname,Lname');
        $this->db->from('tbl_user');
        $this->db->where('user_id', $user_id);
        $query = $this->db->get();
        // $query = $this->db->get_where('tb_users', ['nik' => $nik]);
        return $query->row_array();
        var_dump($query);
        die;
    }
}
