<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Model {

	public function results($search_term) {
		$query = "SELECT products.name FROM products WHERE products.name LIKE '%{$search_term}%'";
		return $this->db->query($query)->result_array();
	}	
}


