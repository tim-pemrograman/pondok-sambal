<?php
 
class Cart extends CI_Controller { // Our Cart class extends the Controller class
     
    public function __construct()
    {
        parent::__construct(); // We define the the Controller class is the parent. 
        $this->load->model('cart_model'); // Load our cart model for our entire class 
        $this->load->library('cart');
    }
    
    /* End of file cart.php */
    /* Location: ./application/controllers/cart.php */
    public function index()
    {
        $data['tbl_product'] = $this->cart_model->retrieve_products(); // Retrieve an array with all products
        
	    $data['content'] = 'cart/products'; // Select our view file that will display our products
        $this->load->view('cart' , $data); // Display the page with the above defined content
    }
    public function add_cart_item(){
        
        if($this->cart_model->validate_add_cart_item() == TRUE){
            // Check if user has javascript enabled
            if($this->input->post('ajax') != '1'){
                redirect('ordertaker'); // If javascript is not enabled, reload the page with new data
            }else{
                echo 'true'; // If javascript is enabled, return true, so the cart gets updated
            }
        }
         
    }

    public function show_cart(){
        $this->load->view('cart/cart');
    }

    public function update_cart(){
        $this->cart_model->validate_update_cart();
        redirect('ordertaker/checkout');
    }

    public function empty_cart(){
        $this->cart->destroy(); // Destroy all cart data
        redirect('ordertaker'); // Refresh te page
    }

    
}
