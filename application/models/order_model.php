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

    public function get_order_byid($id)
    {
        $query = $this->db->get_where('tbl_order_item', array('order_id' => $id));
        return $query->result();

        // //Join with tbl_menu
        // $this->db->select('*');
        // $this->db->from('tbl_order');
        // $this->db->join('tbl_menu', 'tbl_order.id_menu = tbl_menu.menu_id');
        // $this->db->where('tbl_order.order_id', $id);
        // return $query->row();
    }

    public function delete_message($id)
    {
        $this->db->delete('tbl_message', array('message_id' => $id));
    }

}
 