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

    }

    public function get_order_by_id() 
    {

    }

    public function get_order_detail()
    {
        # code...
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
                    'order_id' => $order_id
                );
                $this->db->insert('tbl_order_item', $data_order_item);
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

        // count total price and total item
        foreach (($this->cart->contents()) as $item):
            
                $total_price += $item['price'];
                $total_item += $item['qty'];
                
        endforeach;

        // create data order array
        $data_order = array(
            'cust_id' => (int)$user_id,
            'total_qty' => (int)$total_item,
            'total_price' => (int)$total_price,
            'order_date' => $now,
            'payment_method' => $method,
            'order_status' => $status
        );

        // insert into tbl_order and return id
        $this->db->insert('tbl_order', $data_order);
        $returned_order_id = $this->db->insert_id();
        return $returned_order_id;
    }

    public function doPayment() 
    {

    }
}
?>