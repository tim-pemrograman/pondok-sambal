<?php
class order_model extends CI_Model
{
    public function get_order()
    {        
        $this->db->select('*');
        $this->db->from('tbl_order');
        $this->db->join('tbl_user', 'tbl_order.cust_id = tbl_user.user_id');
        $query = $this->db->get();
        return $query->result();
    }

    public function add_message($data)
    {
        $this->db->insert('tbl_message', $data);
    }

    // public function get_employee_by_id($id)
    // {
    //     $query = $this->db->get_where('tbl_employee', array('employee_id' => $id));
    //     return $query->row();
    // }

    public function delete_message($id)
    {
        $this->db->delete('tbl_message', array('message_id' => $id));
    }

}
 