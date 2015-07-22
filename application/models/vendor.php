<?php 

class Vendor extends CI_Model {


    public function get_vendor($vendor_info)
    {
        $query = "SELECT vendors.id, vendors.name, vendors.email, vendors.address_1, vendors.address_2, vendors.city, vendors.state, vendors.country, vendors.zip, vendors.vendor_rating FROM vendors WHERE vendors.password = ? and vendors.username = ?;";
        $values = array($vendor_info['password'], $vendor_info['username']);
        return $this->db->query($query, $values)->row_array();
    }

    public function get_orders($vendor_id)
    {
    	$query = "SELECT * from orders WHERE orders.vendor_id = ?;";
    	$values = array($vendor_id);
    	return $this->db->query($query, $values)->result_array();
    }

    public function get_products($vendor_id)
    {
    	$query = "SELECT products.name, vendor_products.stock_gram, vendor_products.price_gram FROM products LEFT JOIN vendor_products ON products.id = vendor_products.product_id 
    	JOIN vendors ON vendor_products.vendor_id = vendors.id WHERE vendors.id = ?;";
    	$values = array($vendor_id);
    	return $this->db->query($query, $values)->result_array();
    }
}

?>