<?php
class dashboard_model extends CI_Model
{
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
 