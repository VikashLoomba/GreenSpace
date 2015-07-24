<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Populate extends CI_Model {

	//populate one strain in OUR database
	public function populate_DB($strain_data) {
		$query = "INSERT INTO products2 (leafly_id, name, slug, category, symbol, description, star_image, 
			                  thumb_img1, thumb_img2, thumb_img3, thumb_img4, fullsize_img1, fullsize_img2, fullsize_img3, fullsize_img4,
			                  test_graph, effects1, effects2, effects3, effects4, effects5, medical1, medical2, medical3, medical4, medical5,
			                  negatives1, negatives2, negatives3, negatives4, negatives5, grow_difficulty) 
			                  VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
	    

	    $values = array($strain_data[0], $strain_data[1], $strain_data[2], $strain_data[3], $strain_data[4], $strain_data[5], $strain_data[6],
	    	            $strain_data[7][0], $strain_data[7][1], $strain_data[7][2], $strain_data[7][3], $strain_data[8][0], $strain_data[8][1],
	    	            $strain_data[8][2], $strain_data[8][3], $strain_data[9], $strain_data[10][0], $strain_data[10][1], $strain_data[10][2],
	    	            $strain_data[10][3], $strain_data[10][4], $strain_data[11][0], $strain_data[11][1], $strain_data[11][2], $strain_data[11][3],
	    	            $strain_data[11][4], $strain_data[12][0], $strain_data[12][1], $strain_data[12][2], $strain_data[11][3], $strain_data[11][4],
	    	            $strain_data[13]);

	  	$this->db->query($query, $values);

	}
}


