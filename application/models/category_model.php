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

    public function edit_category()
    {
        $id = $this->input->post('id_category');

        $data = array(
            'name' => $this->input->post('name'),
            'description' => $this->input->post('description'),
            'category_img' => $this->input->post('category_img')
        );
        $this->db->where('id', $id);
        $this->db->update('tbl_category', $data);
    }

    public function delete_category($id)
    {
        $this->db->delete('tbl_category', array('id' => $id));
    }
}
