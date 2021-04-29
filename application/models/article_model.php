<?php
class article_model extends CI_Model
{
    public function get_articles()
    {
        $this->db->select('*');
        $this->db->from('tbl_article');
        $this->db->join('tbl_employee', 'tbl_employee.employee_id = tbl_article.employee_id');
        $this->db->order_by('created_at', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    public function view_article($id)
    {
        // $this->db->select('*');
        // $this->db->from('tbl_article');
        // $this->db->join('tbl_employee', 'tbl_employee.employee_id = tbl_article.employee_id');
        // $this->db->where('article_id', $id);
        // $query = $this->db->get();
        // return $query->row();
        $this->db->select('views');
        $query = $this->db->get_where('tbl_article', array('article_id' => $id));
        $total = $query->row();
        

        $data = array(
            'views' => (int)($total->views)+1
        );

        $this->db->where('article_id', $id);
        $this->db->update('tbl_article', $data);
        return $data;
    }

    public function get_article_by_id($id)
    {
        // $query = $this->db->get_where('tbl_article', array('article_id' => $id));
        // return $query->row();
        $this->db->select('*');
        $this->db->from('tbl_article');
        $this->db->join('tbl_employee', 'tbl_employee.employee_id = tbl_article.employee_id');
        $this->db->where('article_id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function get_recent()
    {
        $this->db->select('*');
        $this->db->from('tbl_article');
        $this->db->join('tbl_employee', 'tbl_employee.employee_id = tbl_article.employee_id');
        $this->db->limit(3);
        $this->db->order_by('created_at', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    public function add_article($data)
    {
        $this->db->insert('tbl_article', $data);
    }

    public function edit_article($data)
    {
        $id = $this->input->post('id_article');
        $this->db->where('article_id', $id);
        $this->db->update('tbl_article', $data);
    }

    public function delete_article($id)
    {
        $this->db->delete('tbl_article', array('article_id' => $id));
    }
}
