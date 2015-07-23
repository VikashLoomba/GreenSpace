<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mains extends CI_Controller {

	public function index() {
		$this->load->view('index');
	}

	public function search($page) {
		$this->load->model('search');

		if ($this->input->post('search') == null) {
			$strains = $this->search->results($this->session->userdata('search'));	
		} else {
			$strains = $this->search->results($this->input->post('search'));
			$this->session->set_userdata('search', $this->input->post('search'));
		}
		
		$appID = "4ddfe7a9";
		$appKEY = "f65a763047cad07bb2d6fdabbc9860b3";

		// pagination: displaying 5 results per page
		$start = $page * 5 - 5;
		$end = $start + 5;
		if ($end > count($strains)) {
			$end = count($strains);
		}


		$strains_JSON = array();
		for ($i = $start; $i < $end; $i++) {
			$slug = str_replace(' ', '-', $strains[$i]['name']);
			$slug = strtolower($slug);

			//init curl
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, "http://data.leafly.com/strains/" . $slug); //change the strain dynamically of course for your app
			curl_setopt($ch,CURLOPT_HTTPHEADER, array("APP_ID:" . $appID, "APP_KEY:" . $appKEY));
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			$output = curl_exec($ch);

			//Clean it into an php array object and push to strains array
			$strains_JSON[] = json_decode($output,true);

			// close curl resource to free up system resources
			// curl_close($output);
		}
		$this->load->view('search_results', array('strains' => $strains_JSON, 'total' => count($strains)));
	}
	
}


