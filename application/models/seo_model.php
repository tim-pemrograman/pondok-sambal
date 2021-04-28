<?php
class seo_model extends CI_Model
{
    public function get_seo()
    {
        $query = $this->db->get('tbl_seo');
        return $query->row();
    }

    public function edit_seo($data)
    {
        $id = $this->input->post('id_seo');
        $this->db->where('seo_id', $id);
        $this->db->update('tbl_seo', $data);
    }

}
 