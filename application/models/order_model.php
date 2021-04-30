<?php
class order_model extends CI_Model 
{
    // status:
    // 0 -> order & not paid
    // 1 -> order & paid
    // 2 -> admin accepted, order on process
    // 3 -> on delivery
    // 4 -> delivered & paid
    public function get_orders() 
    {
        $query = $this->db->get('tbl_order');
        return $query->result();
    }

    public function get_order_by_id($id) 
    {
        $query = $this->db->get_where('tbl_order', array('id' => $id));
        return $query->row();
    }
  
    public function admin_get_order()
    {        
        $this->db->select('*');
        $this->db->from('tbl_order');
        $this->db->join('tbl_user', 'tbl_order.cust_id = tbl_user.user_id');
        $this->db->join('tbl_payment', 'tbl_order.order_id = tbl_payment.order_id');
        $this->db->where('tbl_order.dlt', 0);
        $query = $this->db->get();
        return $query->result();
    }

    public function filter_get_order($filter)
    {
        $this->db->select('*');
        $this->db->from('tbl_order');
        $this->db->join('tbl_user', 'tbl_order.cust_id = tbl_user.user_id');
        $this->db->join('tbl_payment', 'tbl_order.order_id = tbl_payment.order_id');
        $this->db->where('order_status', $filter);
        $this->db->where('tbl_order.dlt', 0);
        $query = $this->db->get();
        return $query->result();
    }

    public function admin_get_order_byid($id)
    {
        // $query = $this->db->get_where('tbl_order_item', array('order_id' => $id));
        // return $query->result();

        // //Join with tbl_menu
        $this->db->select('*');
        $this->db->from('tbl_order_item');
        $this->db->join('tbl_product', 'tbl_order_item.product_id = tbl_product.id');
        $this->db->join('tbl_order', 'tbl_order_item.order_id = tbl_order.order_id');
        $this->db->join('tbl_payment', 'tbl_order_item.order_id = tbl_payment.order_id');
        $this->db->where('tbl_order_item.order_id', $id);
        $query = $this->db->get();
        return $query->result();
    }

    public function receipt_get_order_byid($id)
    {
        // $query = $this->db->get_where('tbl_order_item', array('order_id' => $id));
        // return $query->result();

        // //Join with tbl_menu
        $this->db->select('*');
        $this->db->from('tbl_order_item');
        $this->db->join('tbl_product', 'tbl_order_item.product_id = tbl_product.id');
        $this->db->join('tbl_order', 'tbl_order_item.order_id = tbl_order.order_id');
        $this->db->join('tbl_user', 'tbl_order.cust_id = tbl_user.user_id');
        $this->db->join('tbl_payment', 'tbl_order_item.order_id = tbl_payment.order_id');
        $this->db->where('tbl_order_item.order_id', $id);
        $query = $this->db->get();
        return $query->row();
    }


    public function get_orders_by_status($user_id)
    {
        
        $array = array('order_status !=' => 4, 'cust_id' => $user_id);
        $this->db->where($array);
        $query = $this->db->get('tbl_order');
        return $query->result();
        // var_dump($query->result()); exit;
    }

    public function get_user_orders_by_status()
    {
        $this->db->where('order_status !=', 4);
        $query = $this->db->get('tbl_order');
        return $query->result();
        // var_dump($query->result()); exit;
    }

    public function proceed_checkout($method, $status)
    {
        $order_id = $this->addOrder($method, $status);
        // if id is not empty then insert order item
        if($order_id != NULL && $order_id != '') {
            // echo"not empty";

            foreach (($this->cart->contents()) as $item):
                // insert order item
                $data_order_item = array(
                    'price_per_item' => $item['price'],
                    'item_qty' => $item['qty'],
                    'sub_total' => $item['price'] * $item['qty'],
                    'product_id' => (int)$item['id'],
                    'order_id' => $order_id,
                    
                );
                $this->db->insert('tbl_order_item', $data_order_item);
                // var_dump($data_order_item);exit;
            endforeach;
        }

        return $order_id;
    }

    public function addOrder($method, $status) 
    {
        // declare needed variables
        $user_id = $this->session->userdata('user_id');
        $total_item = 0;
        $total_price = 0;
        // now date
        $this->load->helper('date');
        date_default_timezone_set('Asia/Jakarta');
        $now = date('Y-m-d H:i:s');
        
        // generate receipt number
        $receipt_no = date('Y/m/d')."/ORDER/UID/".$user_id.rand(0,100000);
        
        // count total price and total item
        foreach (($this->cart->contents()) as $item):
            
                $total_price += $item['price']*$item['qty'];
                $total_item += $item['qty'];
                
        endforeach;

        // create data order array
        $data_order = array(
            'cust_id' => (int)$user_id,
            'receipt_no' => $receipt_no,
            'total_qty' => (int)$total_item,
            'total_price' => (int)$total_price,
            'order_date' => $now,
            'payment_method' => $method,
            'order_status' => $status
        );
        
        // var_dump($data_order);exit;
        // insert into tbl_order and return id
        $this->db->insert('tbl_order', $data_order);
        $returned_order_id = $this->db->insert_id();
        return $returned_order_id;
    }

    public function doPayment() 
    {

    }

    public function update_proses($order_status, $id_order)
    {
        $this->db->set('order_status', $order_status);
        $this->db->where('order_id', $id_order);
        $this->db->update('tbl_order'); // gives UPDATE `mytable` SET `field` = 'field+1' WHERE `id` = 2
    }

    public function delete_order($id_order)
    {
        $this->db->set('dlt', 1);
        $this->db->where('order_id', $id_order);
        $this->db->update('tbl_order'); // gives UPDATE `mytable` SET `field` = 'field+1' WHERE `id` = 2
    }
}
?>
