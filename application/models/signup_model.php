<?php
class signup_model extends CI_Model
{

    public function InsertDtAcc($data_acc) {
    
    $this->db->insert('tbl_employee', $data_acc);
    
}

public function GetEmail($email)
    {
        $this->db->select('email');
        $this->db->from('tbl_employee');
        $this->db->where('email', $email);
        $query = $this->db->get();
        // $query = $this->db->get_where('tb_users', ['nik' , $nik]);
        return $query->row_array();
        var_dump($query);
        die;
    }

    public function GetNama($employee_id)
    {
        $this->db->select('Fname,Lname');
        $this->db->from('tbl_employee');
        $this->db->where('employee_id', $employee_id);
        $query = $this->db->get();
        // $query = $this->db->get_where('tb_users', ['nik' , $nik]);
        return $query->row_array();
        var_dump($query);
        die;
    }
}

?>