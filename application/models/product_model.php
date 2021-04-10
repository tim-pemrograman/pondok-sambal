<?php
class product_model extends CI_Model
{
    public function get_products()
    {
        $query = $this->db->get('tbl_product');
        return $query->result();
    }

    public function add_product($data)
    {
        $this->db->insert('tbl_product', $data);
    }

    public function edit_product()
    {
        $id = $this->input->post('id_product');

        $data = array(
            'name' => $this->input->post('name'),
            'description' => $this->input->post('description'),
            'product_img' => $this->input->post('product_img'),
            'price' => $this->input->post('price'),
            'rating' => $this->input->post('rating'),
            'category_id' => $this->input->post('category_id')
        );
        $this->db->where('id', $id);
        $this->db->update('tbl_product', $data);
    }

    public function delete_product($id)
    {
        $this->db->delete('tbl_product', array('id' => $id));
    }
}
