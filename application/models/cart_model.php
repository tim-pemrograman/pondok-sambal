<?php 
 
    class cart_model extends CI_Model { // Our Cart_model class extends the Model class
         
        // Function to retrieve an array with all product information
        function retrieve_products(){
            $query = $this->db->get('tbl_product'); // Select the table products
            return $query->result_array(); // Return the results in a array.
        }  

        function validate_add_cart_item(){
            
            $id = $this->input->post('id'); // Assign posted product_id to $id
            $cty = $this->input->post('quantity'); // Assign posted quantity to $cty
            //$this->db->where('id', $id); // Select where id matches the posted id
            $query = $this->db->get_where('tbl_product', array('id' => $id)); // Select the products where a match is found and limit the query by 1
            
            // Check if a row has matched our product id
            if($query->num_rows() > 0){
                
                // We have a match!0

                foreach ($query->result() as $row)
                {
                    // Create an array with product information
                    $data = array(
                        'id'      => $id,
                        'qty'   => intval($cty),
                        'price'   => intval($row->price),
                        'name'    => $row->name
                    );
                    

                    // // DATA CONTOH DARI DOKUMENASI
                    // $data = array(
                    //     'id'      => 'sku_123ABC',
                    //     'qty'     => 1,
                    //     'price'   => 39.95,
                    //     'name'    => 'T-Shirt',
                    // );
                
                    // var_dump($data); exit;
                    
                    // Add the data to the cart using the insert function that is available because we loaded the cart library
                    // var_dump($this->cart->insert($data)); exit;
                    // var_dump($data); exit;

                    // // CEK FUNCTION INSNERT CART
                    if($this->cart->insert($data)){
                        return TRUE; // Finally return TRUE
                        // var_dump('berhasil insert kealam cart'); exit;
                    }else{
                        var_dump('gagal insert kedalam cart'); exit;
                    }
                }
                    
             
            }else{
                // Nothing found! Return FALSE! 
                return FALSE;
            }
        }
        // Updated the shopping cart
        function validate_update_cart(){
     
            // Get the total number of items in cart
            $total = $this->cart->total_items();
     
            // Retrieve the posted information
            $item = $this->input->post('rowid');
            $qty = $this->input->post('qty');
 
            // Cycle true all items and update them
            for($i=0;$i < $total;$i++)
                {
                // Create an array with the products rowid's and quantities. 
                $data = array(
                'rowid' => $item[$i],
                'qty'   => $qty[$i]
                );
         
            // Update the cart with the new information
            $this->cart->update($data);
        }
 
}
    }
     
/* End of file cart_model.php */
/* Location: ./application/models/cart_model.php */