<?php
class gallery_model extends CI_Model
{
    public function get_galleries()
    {
        $query = $this->db->get('tbl_company_gallery');
        return $query->result();
    }

    public function add_gallery($data)
    {
        $this->db->insert('tbl_company_gallery', $data);
    }

    public function edit_gallery()
    {
        $id = $this->input->post('id_gallery');

        $data = array(
            'img_alt' => $this->input->post('img_alt')
        );
        $this->db->where('id', $id);
        $this->db->update('tbl_company_gallery', $data);
    }

    public function delete_gallery($id)
    {
        $this->db->delete('tbl_company_gallery', array('id' => $id));
    }
}
