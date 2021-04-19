<?php
class MenuPage extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// Load Model
		$this->load->model('category_model');
		$this->load->model('menu_model');
		$this->load->library('cart');
	}
	public function menu()
	{
		$data['categories'] = $this->category_model->get_categories();
		$data['featured_menus'] = $this->menu_model->get_featured_menus();
		$data['cat_menus'] = $this->menu_model->get_menus_by_category(1);
		$data['menus'] = $this->menu_model->get_menus();

		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('menu-mixed', $data);
		$this->load->view('footer');
	}
	public function add_to_cart()
	{
	$data = array(
		'id' => $this->input->post('id'),
		'product_img' => $this->input->post('product_img'),
        'name' => $this->input->post('name'),
        'description' => $this->input->post('description'),
        'price'=> $this->input->post('price'),
        	);
		$this->cart->insert($data);
		echo $this->show_cart();
	}

	public function show_cart(){
		$output = '';
		$no = 0;
		foreach ($this->cart->contents() as $items) {
		$no++;
		$output .='
		<tr>
		<td>'.$items['name'].'</td>
		<td>'.number_format($items['price']).'</td>
		<td>'.$items['qty'].'</td>
		<td>'.number_format($items['subtotal']).'</td>
		<td><button type="button" id="'.$items['menu'].'" class="romove_cart btn btn-danger btn-sm">Cancel</button></td>
		</tr>
		';
		}
		$output .= '
		<tr>
		<th colspan="3">Total</th>
		<th colspan="2">'.'Rp '.number_format($this->cart->total()).'</th>
		</tr>
		';
		return $output;
		}
		
	public function load_cart(){
		echo $this->show_cart();
		}

	public function delete_cart(){
		$data = array(
		'menu' => $this->input->post('menu'),
		'qty' => 0,
		);
		$this->cart->update($data);
		echo $this->show_cart();
		}
}