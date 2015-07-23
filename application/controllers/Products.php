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

	
	//FOR NOW THE SEARCH FUNCTION ONLY WORKS ON STRAINS - NOT VENDORS -> VENDORS WILL COME FROM THE DB..right..?
	public function product_info()
	{
		
		//pass an array below with a products info
		$strain = $this->product->get_strain();
		$this->load->view('products/index', array('search_results'=>$strain));
		// $this->load->view('products/partials/product_info', array('search_results'=>$result));
	}

	//search from url
	public function search($strain)
	{
		return $this->product->search_results($strain);
	}

	// search from within form => for testing purposes (normally the form will go to results page)
	// public function search(){
	// 	$query = $this->input->post();
	// 	$this->product->search_results($query);
	// 	$this->load->view('products/index', array('search_results'=>$strain_info));	
	// }


	//strain below comes from the url request and is a strain slug
	public function strain_index($strain){
		//function below calls the search_results method from the product model to make an api strain request to the leafly api
		$strain_info = $this->product->search_results($strain);
		$this->session->set_userdata('strain_info', $strain_info);
		$this->load->view('products/index', array('search_results'=>$strain_info));	
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
		$this->load->view('products/partials/vendor', array('vendors'=>$vendors));

	}

	public function get_single_vendor($vendor_name)
	{
        $vendor_name = str_replace('-', ' ', $vendor_name);		
		$vendor = $this->product->get_single_vendor($vendor_name);
		$this->load->view('products/vendor_page', array('vendor_products'=>$vendor, 'vendor_name'=>$vendor_name));
	}

}