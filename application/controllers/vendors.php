<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendors extends CI_Controller {

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

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('vendor');
	}

	public function index()
	{
		$this->load->view('vendor/vendor');
	}

	public function login()
	{
		$vendor_info['username'] = $this->input->post('username');
		$vendor_info['password'] = $this->input->post('password');
		if (!$this->vendor->get_vendor($vendor_info)) 
		{
			echo 'Something went wrong';
		}
		else
		{
			$current_vendor['info'] = $this->vendor->get_vendor($vendor_info);
			$this->session->set_userdata($current_vendor['info']);
			redirect('/vendor/dashboard');
		}
	}

	public function logoff()
	{
		$this->session->sess_destroy();
		redirect('/');
	}

	public function vendor_home()
	{
		$this->load->view('vendor/vendor_home');	
	}

	public function orders()
	{
		$vendor_id = $this->session->userdata('id');
		$vendor_info['orders'] = $this->vendor->get_orders($vendor_id);
		$this->load->view('vendor/partials/orders', $vendor_info);
	}

	public function update_vendor_order()
	{
		$order['date'] = $this->input->post("date");
		$order['order_id'] = $this->input->post("order_id");
		if ($this->vendor->add_fulfilled($order)) 
		{
			$this->orders();
		}
		else
		{
			echo 'Something went wrong updating order';
		}
	}

	public function products()
	{
		$vendor_id = $this->session->userdata('id');
		$vendor_info['products'] = $this->vendor->get_products($vendor_id);
		$this->load->view('vendor/partials/products', $vendor_info);
	}

	public function search_product()
	{
		$vendor_id = $this->session->userdata('id');
		$search_term = $this->input->post('search_query');
		$vendor_info['search_results'] = $this->vendor->find_product($search_term, $vendor_id);
		$this->load->view('vendor/partials/search_results', $vendor_info);
	}

	public function add_product()
	{
		$vendor_id = $this->session->userdata('id');
		$product_id = $this->input->post("product_id");		
		$product_add['vendor_id'] = $vendor_id;
		$product_add['product_id'] = $product_id;
		$this->load->view('vendor/partials/product_add', $product_add);
	}

	public function show_product()
	{
		$vendor_product_info['vendor_id'] = $this->session->userdata('id');
		$vendor_product_info['product_id'] = $this->input->post("product_id");
		if (!$this->vendor->get_single_product($vendor_product_info)) 
		{
			echo 'Could not retrieve product';
		}
		else
		{
			$product_to_display['product'] = $this->vendor->get_single_product($vendor_product_info);
			$product_to_display['id'] = $this->input->post("vend_product");
			$this->load->view('vendor/partials/product_page', $product_to_display);
		}
	}

	public function edit_product()
	{
		$product_updated['price'] = $this->input->post("price");
		$product_updated['stock'] = $this->input->post("stock");
		$product_updated['id'] = $this->input->post("id");
		if ($this->vendor->edit_product($product_updated)) 
		{
			$this->products();
		}
		else
		{
			echo 'Something went wrong';
		}
	}

	public function append_product()
	{
		$product_id = $this->input->post("product_id");
		$vendor_id = $this->input->post("vendor_id");
		$initial_stock = $this->input->post("stock");
		$initial_price = $this->input->post("price");
		if ($this->vendor->add_product($vendor_id, $product_id, $initial_stock, $initial_price)) 
		{
			$this->products();
		}
			
	}

	public function registration()
	{
		$this->load->view('vendor/register.php');
	}

	public function submit_registration()
	{
		$vendor_info['name'] = $this->input->post("name");
		$vendor_info['username'] = $this->input->post("username");
		$vendor_info['password'] = $this->input->post("password");
		$vendor_info['phone'] = $this->input->post("phone");
		$vendor_info['email'] = $this->input->post("email");
		$vendor_info['address_1'] = $this->input->post("address-line1");
		$vendor_info['address_2'] = $this->input->post("address-line2");
		$vendor_info['city'] = $this->input->post("city");
		$vendor_info['state'] = $this->input->post("state");
		$vendor_info['zip'] = $this->input->post("zip");
		if (!$this->vendor->add_vendor($vendor_info)) 
		{
			echo 'Something went wrong...';
		}
		else
		{
			redirect('/');
		}
	}


}


