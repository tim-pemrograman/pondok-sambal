<?php
class dashboard_model extends CI_Model
{
    public function GetNama($employee_id)
    {
        $this->db->select('Fname,Lname');
        $this->db->from('tbl_employee');
        $this->db->where('employee_id', $employee_id);
        $query = $this->db->get();
        // $query = $this->db->get_where('tb_users', ['nik' => $nik]);
        return $query->row_array();
        // var_dump($query);
        die;
    }

    

    public function getDataMonthly($month)
    {
        $this->db->select_sum('total_price');
        $this->db->from('tbl_order');
            $where = "DATE_FORMAT(order_date, '%Y-%m') = '".$month."' and dlt = 0 ";
        $this->db->where($where);

        $query = $this->db->get();

        return $query->row();
    }

    public function getDataAnnual($year)
    {
        $this->db->select_sum('total_price');
        $this->db->from('tbl_order');
            $where = "DATE_FORMAT(order_date, '%Y') = '".$year."' and dlt = 0 ";
        $this->db->where($where);

        $query = $this->db->get();

        return $query->row();
    }

    public function getPendingOrder()
    {
        $this->db->select('*');
        $this->db->from('tbl_order');
            $where = "(order_status ='0' OR order_status='1')";
        $this->db->where($where);
        $this->db->where('tbl_order.dlt', 0);
        $query = $this->db->count_all_results();
        return $query;
    }

    public function getMenuCount()
    {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $query = $this->db->count_all_results();
        return $query;
    }

    public function getChartData()
    {
        $this->db->select('month(order_date) as month ,sum(total_price ) as price');
        $this->db->from('tbl_order');
        $this->db->where('tbl_order.dlt', 0);
        $this->db->group_by('month(order_date)');
        $query = $this->db->get();
        return $query->result_array();
    }

}
 