<?php
class company_model extends CI_Model
{
    public function get_company()
    {
        $query = $this->db->get('tbl_company');
        return $query->row();
    }

    public function edit_company($data)
    {
        $id = $this->input->post('id_article');
        $this->db->where('company_id', '1');
        $this->db->update('tbl_company', $data);
    }

}
 