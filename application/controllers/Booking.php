<?php

class Booking extends CI_Controller
{
	function __construct() {
		parent::__construct();	
		$this->load->helper('url');
		$this->load->model('team_model');
		$this->load->model('booking_model');
		$this->load->model('venue_model');
	}

	function booking_index($team_id = 1) {
		$data['page_title'] = 'Bookings';
		$data['team_names'] = $this->team_model->get_team_list(); 
		$data['team_bookings'] = $this->booking_model->get_team_bookings($team_id);

		print_r($data['team_bookings']);

		$this->load->view('header', $data);
		$this->load->view('navbar');
		$this->load->view('bookings', $data);
		$this->load->view('footer');
	}

	function customer_index($id = 1) {
		$data['page_title'] = 'Customers';
		$data['customer'] = $this->booking_model->get_customer($id); 
		$data['customer_names'] = $this->booking_model->get_customer_names();
		$data['customer_bookings'] = $this->booking_model->get_customer_bookings($id);

		print_r($data['customer']);
		print_r($data['customer_names']);
		print_r($data['customer_bookings']);

		$this->load->view('header', $data);
		$this->load->view('navbar');
		$this->load->view('customers', $data);
		$this->load->view('footer');
	}

	function booking_detail_index() {
		$data['page_title'] = 'Bookings';
		$data['venue_names'] = $this->venue_model->get_venue_names();
		$data['team_info'] = $this->team_model->get_vessel_and_capacity();

		$this->load->view('header', $data);
		$this->load->view('navbar');
		$this->load->view('booking_detail');
		$this->load->view('footer');
	}

	function booking_detail_submit() {
		$this->booking_model->make_booking();
		$this->booking_detail_index();
	}
}
