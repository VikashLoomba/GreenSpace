<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mains extends CI_Controller {

	public function __construct() {
		parent::__construct();
		// $this->output->enable_profiler();
	}

	public function index() {
		$this->load->view('index');
	}

	public function search($page) {
		$this->load->model('search');
		
		//if pagination clicked, grab session data for search term, otherwise, user typed in a new search term
		if ($this->input->post('search') == null) {
			$strains = $this->search->get_all($this->session->userdata('search'));	
		} else {
			$strains = $this->search->get_all($this->input->post('search'));
			$this->session->set_userdata('search', $this->input->post('search'));
		}

		//pagination
		$start = $page * 10 - 10;
		$end = $start + 10;
		if ($end > count($strains)) {
			$end = count($strains);
		}

		$strains_display = array();
		for ($i = $start; $i < $end; $i++) {
			$strains_display[] = $strains[$i];
		}
		$this->load->view('search_results', array('strains' => $strains_display, 'total' => count($strains), 'page_num' => $page));
	}

	// get all slug names within OUR database
	public function get_slugs() {
		$this->load->model('search');
		$strains = $this->search->get_all();
		$slugs = array();
		foreach ($strains as $strain) {
			$slug = $strain['name'];
			$slug = str_replace(' ', '-', $slug);
			$slug = strtolower($slug);
			$slugs[] = $slug;
		}
		// return $slugs;
		// var_dump($slugs);
		$string = '';
		foreach ($slugs as $slug) {
			$string .= "'" . $slug . "'" . ',';
		}
		var_dump($string);
	}

	//get JSON Object for 1 slug
	public function get_JSON($slug) {
		$appID = "4ddfe7a9";
		$appKEY = "f65a763047cad07bb2d6fdabbc9860b3";

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "http://data.leafly.com/strains/" . $slug); //change the strain dynamically of course for your app
		curl_setopt($ch,CURLOPT_HTTPHEADER, array("APP_ID:" . $appID, "APP_KEY:" . $appKEY));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$output = curl_exec($ch);

		//Clean it into an php array object and push to strains array
		
		$slug_JSON = json_decode($output,true);
		return $slug_JSON;
	}
		
	// populate array with JSON object data
	public function convert_JSON_To_Array($slug) {
		$slug_JSON = $this->get_JSON($slug);

		$strain_data = array();
		$strain_data[] = $slug_JSON['id'];
		$strain_data[] = $slug_JSON['name'];
		$strain_data[] = $slug_JSON['slug'];
		$strain_data[] = $slug_JSON['category'];
		$strain_data[] = $slug_JSON['symbol'];
		$strain_data[] = $slug_JSON['description'];
		$strain_data[] = $slug_JSON['starImage'];

		$strain_data[] = array($slug_JSON['photos'][0]['thumb'], $slug_JSON['photos'][1]['thumb'],
										  $slug_JSON['photos'][2]['thumb'], $slug_JSON['photos'][3]['thumb']);

		$strain_data[] = array($slug_JSON['photos'][0]['fullsize'], $slug_JSON['photos'][1]['fullsize'],
										     $slug_JSON['photos'][2]['fullsize'], $slug_JSON['photos'][3]['fullsize']);

		$strain_data[] = $slug_JSON['testGraph'];

		
		$strain_data[] = array($slug_JSON['effects'][0]['score'], $slug_JSON['effects'][1]['score'], 
                               $slug_JSON['effects'][2]['score'], $slug_JSON['effects'][3]['score'], 
                               $slug_JSON['effects'][4]['score']);
		
		$strain_data[] = array($slug_JSON['symptoms'][0]['score'], $slug_JSON['symptoms'][1]['score'], 
                                $slug_JSON['symptoms'][2]['score'], $slug_JSON['symptoms'][3]['score'], 
                                $slug_JSON['symptoms'][4]['score']);

		$strain_data[] = array($slug_JSON['conditions'][0]['score'], $slug_JSON['conditions'][1]['score'], 
                               $slug_JSON['conditions'][2]['score'], $slug_JSON['conditions'][3]['score'], 
                               $slug_JSON['conditions'][4]['score']);

		$strain_data[] = $slug_JSON['growInfo']['difficulty'];
		return $strain_data;
	}

	//inserts 1 slug object data into OUR database
	public function insert_data($slug) {
		$this->load->model('populate');
		$strain_data = $this->convert_JSON_To_Array($slug);
		$this->populate->populate_DB($strain_data);
	}

	public function automate() {
		$this->load->view('populate');
	}
	
}


