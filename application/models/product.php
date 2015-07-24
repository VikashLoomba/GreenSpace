<?php 

class Product extends CI_Model {

     public function get_strain()
     {
        $strain_info = $this->db->query("SELECT * from products where id=1")->row_array();
        return $strain_info;
     }

     public function search_results($query)
     {
    
        $app_id = '4ddfe7a9';
        $app_key = 'f65a763047cad07bb2d6fdabbc9860b3';
        $search_url = 'http://data.leafly.com/strains/';
        $query = str_replace(' ', '-', $query);
        $query = str_replace('_', '-', $query);
        $search_url = $search_url.$query;
        //  Initiate curl
        $ch = curl_init($search_url);
        // // Disable SSL verification
        // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        // Will return the response, if false it will print the response
        curl_setopt($ch, CURLOPT_URL,$search_url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("APP_ID:" . $app_id, "APP_KEY:" . $app_key));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // Set the url
        // Execute
        $result=curl_exec($ch);
        // Closing
        curl_close($ch);

        // Will return the cleaned up search result object
        return json_decode($result, true);

        //pass an array below with a products info
     }

    public function find_product($search_term, $vendor_id)
    {
    $query = "SELECT * from greencommerce.products where products.name like '%$search_term%' OR products.description like '%$search_term%' AND products.id not in(
        SELECT product_id from vendor_products where vendor_id = $vendor_id);";
    return $this->db->query($query)->result_array();
    }

    //returns vendor info for vendors with a given product
    public function get_vendor($strain_name)
    {
        $name=$strain_name['name'];
        $strain_id = $this->get_product_id_from_name($name);
        $query = "SELECT * from vendor_products
                    join vendors on vendor_products.vendor_id = vendors.id
                    where vendor_products.product_id = {$strain_id['id']}
                    group by vendors.id";
        return array('vendor_info' => $this->db->query($query)->result_array(), 'strain_id'=>$strain_id);
    }

    //returns product id given name
    public function get_product_id_from_name($strain_name)
    {
        $query = "SELECT products.id 
                    from products
                    where products.name = ?";
        $values = $strain_name;
        return $this->db->query($query, $values)->row_array();
    }

    public function get_single_vendor($vendor_name)
    {
        $query = "SELECT vendors.*, products.name , vendor_products.price_gm
                    from vendors 
                    join vendor_products on vendor_products.vendor_id = vendors.id
                    join products on products.id = vendor_products.product_id
                    where vendors.name = ?
                    group by products.name";
        $values = array($vendor_name);
        return $this->db->query($query,$values)->result_array();
    }

    //this fn adds a reservation for a particular product for a given vendor for the logged in user
    public function add_order($reservation)
    {
        $order_query = "insert into orders(created_at, user_id, vendor_id, order_confirmed) 
                            values(now(), ?, ?, 0)";
        $order_values = array($reservation['user_id'], $reservation['vendor_id']);

        $this->db->query($order_query, $order_values);

    }

    public function add_products_belongs($reservation,$order_id)
    {
        $products_query = "insert into products_belong_to_order(product_id, order_id, quantity)
                            values(?,?,?)";
        $products_values = array($reservation['product_id'], $order_id, $reservation['quantity']);

        return $this->db->query($products_query, $products_values);
    }

    public function get_user_reservations($user_id)
    {
        $query = "select users.first_name, products.name, orders.id, vendor_id, products_belong_to_order.quantity
                    from products
                    join products_belong_to_order on products_belong_to_order.product_id = products.id
                    join orders on products_belong_to_order.order_id = orders.id 
                    join users on users.id = orders.user_id
                    where users.id = ?";
                    //remember that the users.id above and below will actually be the logged in user
        $values = array($user_id);
        // var_dump($values);
        // die(); 

        return $this->db->query($query, $values)->result_array();
    }

    public function get_unconfirmed_orders()
    {
        $query = "select orders.id as order_id, vendor_id from orders
                    where orders.order_confirmed=0
                    and user_id = ?";
        
        // the actual argument below will be the session user's id
        $values = array(1);

        return $this->db->query($query, $values)->result_array();
    }

}

?>