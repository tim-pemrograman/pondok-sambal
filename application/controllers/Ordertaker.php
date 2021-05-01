<?php
class Ordertaker extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();

		// Load Model
		$this->load->model('category_model');
		$this->load->model('menu_model');
		$this->load->model('order_model');
		$this->load->model('userlogin_model');
		$this->load->model('payment_model');
		$this->load->model('cart_model'); // Load our cart model for our entire class
		$this->load->model('order_model'); // Load our cart model for our entire class
		$this->load->library('cart');
		$this->load->library('form_validation');
	}

	public function index()
	{	
		$user_id = $this->session->userdata('user_id');

        $data['data_core'] = $this->userlogin_model->GetNama($user_id);

        $data['categories'] = $this->category_model->get_categories();
		$data['featured_menus'] = $this->menu_model->get_featured_menus();
		$data['cat_menu'] = $this->menu_model->get_menus_by_category(1);
		$data['menus'] = $this->menu_model->get_menus();
		

        //Load View
		$this->load->helper('url');
		$this->load->view('order-taker/header-order', $data);
		$this->load->view('order-taker/menu-mixed', $data);
		$this->load->view('order-taker/footer-order');
	}
	
	
	public function history(){
		$user_id = $this->session->userdata('user_id');
		
        // var_dump($data['data_order']); exit;

        $data['data_core'] = $this->userlogin_model->GetNama($user_id);
        $data['ongoing_orders'] = $this->order_model->get_orders_by_status($user_id);
		$data['all_orders'] = $this->order_model->get_orders($user_id);
		$data['data_order'] = $this->order_model->history_order($user_id);


        //Load View
		$this->load->helper('url');
		$this->load->view('order-taker/header-order', $data);
		$this->load->view('order-taker/confirmation', $data);
		$this->load->view('order-taker/footer-order');
	}

	public function view($order_id)
	{
		$user_id = $this->session->userdata('user_id');

        $data['data_core'] = $this->userlogin_model->GetNama($user_id);
        $data['data_order'] = $this->order_model->history_order_byid($order_id);

        // var_dump($data['data_order']); 
        // exit;

		

		 //Load View
		 $this->load->helper('url');
		 $this->load->view('order-taker/header-order', $data);
		 $this->load->view('order-taker/detail', $data);
		 $this->load->view('order-taker/footer-order');
	}

	public function checkout(){
		$user_id = $this->session->userdata('user_id');

        $data['data_core'] = $this->userlogin_model->GetNama($user_id);

        $data['categories'] = $this->category_model->get_categories();
		$data['featured_menus'] = $this->menu_model->get_featured_menus();
		$data['cat_menu'] = $this->menu_model->get_menus_by_category(1);
		$data['menus'] = $this->menu_model->get_menus();
		
        $this->load->view('order-taker/header-order', $data);
        $this->load->view('cart/checkout');
        $this->load->view('order-taker/footer-order');
    }

	public function confirmCheckout($method) {
		if($method == 'e-wallet' || $method == 'cod') {
			if($method == 'e-wallet') {
				// $type = 0;
				// $this->order_model->proceedCheckout($type);
				redirect('ordertaker/payment');
			} if($method == 'cod') {
				$type = 1;
				$status = 0;
				$this->order_model->proceed_checkout($type, $status);
				$this->cart->destroy();
				redirect('ordertaker/history');
			} 
		} else {
			redirect('ordertaker/checkout');
		}
	}

	public function payment(){
		$user_id = $this->session->userdata('user_id');
		if($user_id == NULL || $user_id == '') {
			redirect('homepage');
		} else {
			$data['data_core'] = $this->userlogin_model->GetNama($user_id);
	
			$data['categories'] = $this->category_model->get_categories();
			$data['featured_menus'] = $this->menu_model->get_featured_menus();
			$data['cat_menu'] = $this->menu_model->get_menus_by_category(1);
			$data['menus'] = $this->menu_model->get_menus();
	
			if (empty($_FILES['img_path']['name'])) {
				$this->form_validation->set_rules('img_path', 'img_path', 'required');
			}
	
			if ($this->form_validation->run() === FALSE && empty($_FILES['img_path']['name'])) {
				$this->load->view('order-taker/header-order', $data);
				$this->load->view('cart/payment');
				$this->load->view('order-taker/footer-order');
			} else {
				$type = 0;
				$status = 1;
				$order_id = $this->order_model->proceed_checkout($type, $status);
				if($order_id != NULL && $order_id != '') {
					$this->add_proof($order_id);
				} else {
					redirect('ordertaker/checkout');
				}
	
			}
		}

    }
	
	public function review()
	{
		$user_id = $this->session->userdata('user_id');

        $data['data_core'] = $this->userlogin_model->GetNama($user_id);
		
        $this->load->view('order-taker/header-order', $data);
        $this->load->view('contact-page');
        $this->load->view('order-taker/footer-order');
	}

	public function add_proof($order_id)
    {	
		$upload_image = $this->upload_image();
		$data = array(
			'img_path' => $upload_image,
			'order_id' => $order_id
		);
		$this->payment_model->add_payment($data);
		$this->cart->destroy();
		// $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Bukti Pembayaran berhasil ditambah!</div>');
		redirect('ordertaker/history');
    }

	private function upload_image()
    {
        $config['upload_path'] = './assets/images/payment/';
        $config['allowed_types'] = 'gif|jpg|png|pdf';
        $config['max_size'] = 10000;

        $this->load->library('upload', $config);

        // return $config;
        if (!$this->upload->do_upload('img_path')) {
            $error = array('error' => $this->upload->display_errors());
            return $error;
        } else {
            $data = array('upload_data' => $this->upload->data());
            // $type = explode('.', $_FILES['img_path']['name']);
            // $type = $type[count($type) - 1];

            $path = $config['upload_path'] . $data["upload_data"]["file_name"];
            return ($data == true) ? $path : false;
        }
    }


	public function logout()
	{
		$this->session->unset_userdata('user_id');

		$this->session->set_flashdata('message', '<div class="alert alert-success">Logout Berhasil</div>');
		redirect('homepage');
	}
    
}
?>