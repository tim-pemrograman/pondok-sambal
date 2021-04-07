<?php
class banner_model extends CI_Model
{
    public function get_banners()
    {
        $query = $this->db->get('tbl_company_banner');
        return $query->result();
    }
    public function add_banner($data)
    {
        $this->db->insert('tbl_company_banner', $data);
    }

    public function edit_banner()
    {
        $id = $this->input->post('id_banner');

        $data = array(
            'title' => $this->input->post('title'),
            'subtitle' => $this->input->post('subtitle'),
            'img_alt' => $this->input->post('img_alt')
        );
        $this->db->where('id', $id);
        $this->db->update('tbl_company_banner', $data);
    }

    public function delete_banner($id)
    {
        $this->db->delete('tbl_company_banner', array('id' => $id));
    }
}
