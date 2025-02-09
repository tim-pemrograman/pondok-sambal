<?php
class menu_model extends CI_Model
{
    public function get_menus()
    {
        $query = $this->db->get('tbl_product');
        return $query->result();
    }

    public function get_featured_menus()
    {
        $query =$this->db->get_where('tbl_product', array('featured' => 1));
        return $query->result();
    }
    
    public function get_menus_by_category($category_id)
    {
        $query =$this->db->get_where('tbl_product', array('category_id' => $category_id));
        return $query->result();
    }

    public function get_menu_by_id($id)
    {
        $query = $this->db->get_where('tbl_product', array('id' => $id));
        return $query->row();
    }

    public function add_menu($data)
    {
        $this->db->insert('tbl_product', $data);
    }

    public function edit_menu($data)
    {
        $id = $this->input->post('id_menu');
        $this->db->where('id', $id);
        $this->db->update('tbl_product', $data);
    }

    public function delete_menu($id)
    {
        $this->db->delete('tbl_product', array('id' => $id));
    }
    function get_all_product(){
        $result=$this->db->get('tbl_product');
        return $result;
        }
}
