<?php
class payment_model extends CI_Model
{

    public function add_payment($data)
    {
        $this->db->insert('tbl_payment', $data);
    }

    
}
