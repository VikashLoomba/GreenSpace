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
    $query = "SELECT * from greencommerce.products where products.name like '%$search_term%' OR products.short_description like '%$search_term%' AND products.id not in(
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
        return $this->db->query($query)->result_array();
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
        $query = "SELECT vendors.*, products.name , products.price
                    from vendors 
                    join vendor_products on vendor_products.vendor_id = vendors.id
                    join products on products.id = vendor_products.product_id
                    where vendors.name = ?
                    group by products.name";
        $values = array($vendor_name);
        return $this->db->query($query,$values)->result_array();
    }
}

?>