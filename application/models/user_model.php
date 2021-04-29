<?php
class user_model extends CI_Model
{
    public function get_users()
    {
        $query = $this->db->get('tbl_employee');
        return $query->result();
    }

    public function add_users($data)
    {
        $this->db->insert('tbl_employee', $data);
    }

    public function get_employee_by_id($id)
    {
        $query = $this->db->get_where('tbl_employee', array('employee_id' => $id));
        return $query->row();
    }


    public function edit_user($data)
    {
        $id = $this->input->post('id_employee');
        $this->db->where('employee_id', $id);
        $this->db->update('tbl_employee', $data);
    }

    public function delete_user($id)
    {
        $this->db->delete('tbl_employee', array('employee_id' => $id));
    }

}
 