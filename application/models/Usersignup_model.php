<?php
class Usersignup_model extends CI_Model
{

    public function InsertDtAcc($data_acc) {
    
    $this->db->insert('tbl_user', $data_acc);
    
}

public function GetEmail($email)
    {
        $this->db->select('email');
        $this->db->from('tbl_user');
        $this->db->where('email', $email);
        $query = $this->db->get();
        // $query = $this->db->get_where('tb_users', ['nik' , $nik]);
        return $query->row_array();
        var_dump($query);
        die;
    }

    public function GetNama($user_id)
    {
        $this->db->select('Fname,Lname');
        $this->db->from('tbl_user');
        $this->db->where('user_id', $user_id);
        $query = $this->db->get();
        // $query = $this->db->get_where('tb_users', ['nik' , $nik]);
        return $query->row_array();
        var_dump($query);
        die;
    }
}

?>