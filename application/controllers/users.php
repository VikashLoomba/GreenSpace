<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function user_login() {
		$this->load->view('user_login');
	}

	public function get_user()
	{
		$post['email'] = $this->input->post('email');
		$post['password'] = $this->input->post('password');
		$this->load->model('user');
		$user_info = $this->user->login($post);
		$this->session->set_userdata('user', $user_info);
		redirect('/user/dashboard');
	}

	public function user_registration() {
		$this->load->view('user_registration');
	}

	public function dashboard()
	{
		$this->load->view('user/user_dashboard');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('/');
	}

	public function user_information()
	{
		$this->load->view('user/partials/current_user_information', array('user' => $this->session->userdata('user')));
	}

	public function edit()
	{
		$this->load->view('user/partials/update_user_information');
	}

	public function user_edit()
	{
		$user_information = $this->input->post();
		/*Call function to retrieve all user information*/
	}

	public function current_reservations()
	{
		/*Call function to retrieve last couple of reservations of user*/
		$this->load->model('product');
		$orders = $this->product->get_user_reservations($this->session->userdata('user')['id']);
		/*$user_reservations['orders'] = $this->product->get_user_reservations(1);*/
		$this->load->view('user/partials/reservation_partial', array('orders'=> $orders));
	}

	public function user_coins()
	{
		$this->load->view('user/partials/coins');
	}

	public function registration_check()
	{
		$this->load->model('login');
		$this->login->register();
	}

}