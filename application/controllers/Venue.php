<?php

class Venue extends CI_Controller
{
	function __construct() {
		parent::__construct();	
		$this->load->helper('url');
		$this->load->model('venue_model');
	}

	function pricing_index() {
		$data['page_title'] = 'Pricing';
		$data['venue_names'] = $this->venue_model->get_venue_names();

		$this->load->view('header', $data);
		$this->load->view('navbar');
		$this->load->view('pricing', $data);
		$this->load->view('footer');
	}

	function venue_index($id=1) {
		$data['page_title'] = 'Venues';
		$data['venue_names'] = $this->venue_model->get_venue_names();
		$data['venue_data'] = $this->venue_model->get_venue_data($id);

		$this->load->view('header', $data);
		$this->load->view('navbar');
		$this->load->view('venues', $data);
		$this->load->view('footer');
	}

	function select_venue() {
		$id = $this->venue_model->get_venue_id();
		$this->venue_index($id);
	}

	function update_venue($id) {
		$this->venue_model->update_venue($id);
		$this->venue_index($id);
	}

	function create_venue() {
		$id = $this->venue_model->create_venue();
		$this->venue_index($id);
	}
	
// DAN - I ADDED THIS 
	
	function delete_venue($id) {
		$this->venue_model->delete_venue($id);
		$this->venue_index(1);
	}
}

?>
