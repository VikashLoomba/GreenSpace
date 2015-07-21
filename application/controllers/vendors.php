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

	public function products()
	{
		$vendor_id = $this->session->userdata('id');
		$vendor_info['products'] = $this->vendor->get_products($vendor_id);
		$this->load->view('vendor/partials/products', $vendor_info);
	}


}


