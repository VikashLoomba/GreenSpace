<?php 

class Login extends CI_Model {

    public function register ()
     {
        $post = $this->input->post();
        $query = "INSERT INTO users(email, password, first_name, last_name, created_at, phone_number, birthdate, coins)
                    values(?,?,?,?,NOW(),?,?,?)";
        $values = array($post['email'], $post['password'], $post['first_name'], $post['last_name'], $post['phone_number'], 
                    $post['birthdate'],0);
        $this->db->query($query, $values);
     }

     public function login_user($post)
     {      
            $query = "SELECT * from users where users.email = ? AND users.password = ?;";
            $values = array($post['email'],$post['password']);
            return $this->db->query($query, $values)->row_array();
            if(!$this->db->query($query, $values))
            { //if there is no one with credentials provided
                $this->session->set_flashdata('errors', "Invalid username or password! Register below for access or try again.");
                redirect('mains/user_login');
            }
            else
            {
                $this->session->set_userdata('logged_in', TRUE);
                return $this->db->query($query, $values)->result_array();
            }
    }
}
?>