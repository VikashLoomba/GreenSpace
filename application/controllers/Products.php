<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('product');
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	//$product_id -> add this to product function def as a parameter
	// public function product()
	// {
	// 	$url = "curl -v -H 'app_id:ba2df760' -H 'app_key:d22907ee4e8c35a5fe4eb6cfce8c3cf6' -X POST 'http://data.leafly.com/strains'";
	// 	$url += "$this->input->post()";
	// 	//  Initiate curl
	// 	$ch = curl_init();
	// 	// // Disable SSL verification
	// 	// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	// 	// Will return the response, if false it print the response
	// 	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	// 	// Set the url
	// 	curl_setopt($ch, CURLOPT_URL,$url);
	// 	// Execute
	// 	$result=curl_exec($ch);
	// 	// Closing
	// 	curl_close($ch);

	// 	// Will dump a beauty json :3
	// 	var_dump(json_decode($result, true));
	// 	//pass an array below with a products info
	// 	$this->load->view('products/index');
	// }

	
	// //FOR NOW THE SEARCH FUNCTION ONLY WORKS ON STRAINS - NOT VENDORS -> VENDORS WILL COME FROM THE DB..right..?
	// public function product_info()
	// {
		
	// 	//pass an array below with a products info
	// 	$strain = $this->product->get_strain();
	// 	$this->load->view('products/index', array('search_results'=>$strain));
	// 	// $this->load->view('products/partials/product_info', array('search_results'=>$result));
	// }

	//search from url
	public function search($strain)
	{
		return $this->product->search_results($strain);
	}

	// search from within form => for testing purposes (normally the form will go to results page)
	// public function search(){
	// 	$query = $this->input->post();
	// 	$this->product->search_results($query);
	// 	$this->load->view('products/index', array('search_results'=m >$strain_info));	
	// }


	//strain below comes from the url request and is a strain slug
	public function strain_index($strain){
		//function below calls the search_results method from the product model to search the db for a strain
		$strain_info = $this->product->search_results($strain);
		$this->session->set_userdata('strain_info', $strain_info[0]);
		$this->load->view('products/index', array('search_results'=>$strain_info[0]));	
	}

	public function effects()
	{
		// var_dump($strain_info);
		// die();
		$strain_info = $this->session->userdata('strain_info');
		$this->load->view('products/partials/effects', array('search_results'=>$strain_info));
	}

	public function vendor()
	{	
		$vendors = $this->product->get_vendor($this->session->userdata('strain_info'));
		if($vendors['strain_id']['id']){
			$this->load->view('products/partials/vendor', array('vendors'=>$vendors));
		}
		// else{
		// 	$vendors = $vendors['vendor_info'][0];
		// 	$this->load->view('products/partials/vendor', array('vendors'=>$vendors));
		// }
		// $vendors = $vendors['vendor_info'][0];
		// $this->load->view('products/partials/vendor', array('vendors'=>$vendors, 'product_id'=>$product_id));

	}

	public function get_single_vendor($vendor_name)
	{
        $vendor_name = str_replace('-', ' ', $vendor_name);		
		$vendor = $this->product->get_single_vendor($vendor_name);
		$this->load->view('products/vendor_page', array('vendor_products'=>$vendor, 'vendor_name'=>$vendor_name));
	}

	public function add()
	{
		die();
		$unconfirmed_id = $this->product->get_unconfirmed_orders();
		$reservation = $this->input->post();
		$check['vendor_id'] = $reservation['vendor_id'];
		
		if($unconfirmed_id == 0)
		{
			$this->product->add_order($reservation);
			$order_id = $this->db->insert_id();
		}

		else
		{		
			foreach($unconfirmed_id as $open_id)
			{
				if($open_id['vendor_id'] == $check['vendor_id']){
					$order_id = $open_id['order_id'];
					break;
				}
				else{
					$this->product->add_order($reservation);
				}
			}

			$this->product->add_products_belongs($reservation, $order_id);
			$page = $this->product->get_product_name_from_id($reservation['product_id']);
			$page = $page[0];
			$page = str_replace(' ', '-', $page);
		}
		die();
		$this->load->view('reservations');	

	}

	//get user's unconfirmed orders
	public function get_user_reservations()
	{
		//remember that the argument below will actually be the logged in users
		$reservations = $this->product->get_user_reservations(1);
		$this->load->view('/products/reservations', array('reservations'=>$reservations));
	}

	//returns all of a user's unconfirmed orders

	public function load_users_unconfirmed_reservations()
	{
		//replace argument below with session user
		$unconfirmed_orders = $this->product->get_unconfirmed_orders(1);
		$this->load->view('products/orders_page',array('open_reservations'=> $unconfirmed_orders));

	}

	public function confirm_reservation()
	{
		$this->product->confirm_reservation(2);
		$this->load_users_unconfirmed_reservations();
	}

}