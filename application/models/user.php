<?php 

class User extends CI_Model {
	public function login($post_info)
	{
		$query = "SELECT * FROM users WHERE users.email = ? AND users.password = ?";
		$values = array($post_info['email'], $post_info['password']);
		$this->session->set_userdata('logged_in', TRUE);
		return $this->db->query($query, $values)->row_array();
	}
}
