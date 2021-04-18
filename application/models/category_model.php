<?php
class category_model extends CI_Model
{
    public function get_categories()
    {
        $query = $this->db->get('tbl_category');
        return $query->result();
    }

    public function add_category($data)
    {
        $this->db->insert('tbl_category', $data);
    }

    public function edit_category($data)
    {
        $id = $this->input->post('id_category');

        $this->db->where('id', $id);
        $this->db->update('tbl_category', $data);
    }

    public function delete_category($id)
    {
        $this->db->delete('tbl_category', array('id' => $id));
    }
}
