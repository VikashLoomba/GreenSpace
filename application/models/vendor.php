<?php 

class Vendor extends CI_Model {
/*Vendor Registration*/
	public function add_vendor($vendor_info)
	{
		$query = "INSERT INTO vendors (name, password, username, phone_number, email, address_1, address_2, city, state, country, zip) 
					VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
		$values = array($vendor_info['name'], $vendor_info['password'], $vendor_info['username'], $vendor_info['phone'], $vendor_info['email'], 
			$vendor_info['address_1'], $vendor_info['address_2'], $vendor_info['city'], $vendor_info['state'], "USA", $vendor_info['zip']);
		return $this->db->query($query, $values);
	}
/*Vendor Login*/
    public function get_vendor($vendor_info)
    {
        $query = "SELECT vendors.id, vendors.name, vendors.email, vendors.address_1, vendors.address_2, vendors.city, vendors.state, vendors.country, vendors.zip, vendors.vendor_rating FROM vendors WHERE vendors.password = ? and vendors.username = ?;";
        $values = array($vendor_info['password'], $vendor_info['username']);
        return $this->db->query($query, $values)->row_array();
    }
/*Get all the orders for specific vendor that are unfulfilled*/
    public function get_orders($vendor_id)
    {
    	$query = "SELECT * from orders WHERE orders.vendor_id = ? and orders.order_confirmed = 1;";
    	$values = array($vendor_id);
    	return $this->db->query($query, $values)->result_array();
    }
/*Update a specific order to indicate that it was fulfilled*/
    public function add_fulfilled($order_to_update)
    {
    	$query = "UPDATE orders SET orders.order_fulfilled_date = ? WHERE orders.id = ?;";
    	$values = array($order_to_update['date'], $order_to_update['order_id']);
    	return $this->db->query($query, $values);
    }
/*Get all the products that the vendor carries*/
    public function get_products($vendor_id)
    {
    	$query = "SELECT products2.id, products2.name, vendor_products.id AS vend_prod_id, vendor_products.stock_gram, vendor_products.price_gram FROM products2 LEFT JOIN vendor_products ON products2.id = vendor_products.product_id 
    	JOIN vendors ON vendor_products.vendor_id = vendors.id WHERE vendors.id = ?;";
    	$values = array($vendor_id);
    	return $this->db->query($query, $values)->result_array();
    }
/*Get the information for a single product that the vendor carries*/
    public function get_single_product($vendor_product_info)
    {
    	$query = "SELECT products2.id, products2.name, vendor_products.id, vendor_products.stock_gram, vendor_products.price_gram FROM products2 LEFT JOIN vendor_products ON products2.id = vendor_products.product_id 
    				JOIN vendors ON vendor_products.vendor_id = vendors.id WHERE vendors.id = ? AND vendor_products.product_id = ?;";
    	$values = array($vendor_product_info['vendor_id'], $vendor_product_info['product_id']);
    	return $this->db->query($query, $values)->row_array();
    }
/*Finds products related to search query from the database that the vendor doesn't carry*/
    public function find_product($search_term, $vendor_id)
    {
    	$query = "SELECT * from greencommerce.products2 where (products2.name like '%$search_term%' OR products2.description like '%$search_term%') AND products2.id not in(
    		select product_id from vendor_products where vendor_id = $vendor_id);";
    	return $this->db->query($query)->result_array();
    }
/*Add a product from the search results to the vendors catalogue*/
    public function add_product($vendor_id, $product_id, $initial_stock, $initial_price)
    {
    	$query = "INSERT INTO vendor_products (stock_gram, price_gram, vendor_id, product_id, unit) VALUES (?, ?, ?, ?, 'grams');";
    	$values = array($initial_stock, $initial_price, $vendor_id, $product_id);
    	return $this->db->query($query, $values);
    }
/*Edit the stock and price of a product that the vendor carries*/
    public function edit_product($product_updated)
    {
    	$query = "UPDATE vendor_products SET vendor_products.stock_gram = ?, vendor_products.price_gram = ? WHERE vendor_products.id = ?;";
    	$values = array($product_updated['stock'], $product_updated['price'], $product_updated['id']);
    	return $this->db->query($query, $values);
    }
}

?>