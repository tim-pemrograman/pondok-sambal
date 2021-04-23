<?php
class user_model extends CI_Model
{
    public function get_users()
    {
        $query = $this->db->get('tbl_employee');
        return $query->result();
    }

    public function add_users()
    {

    }

    public function edit_company($data)
    {
        $id = $this->input->post('id_article');
        $this->db->where('company_id', '1');
        $this->db->update('tbl_company', $data);
    }

}
 