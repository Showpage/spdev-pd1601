<?php

class Booking_model extends CI_Model 
{
	function __construct() {
		parent::__construct();
	}

	function make_booking() {
		$outbound_start_destination = $this->input->post('outbound_start_destination');
		$outbound_end_destination = $this->input->post('outbound_end_destination');	
		$inbound_start_destination = $this->input->post('inbound_start_destination');
		$inbound_end_destination = $this->input->post('inbound_end_destination');

		$this->db->select('id');
		$query = $this->db->get_where('Venues', array('name' => $outbound_start_destination));
		$res = $query->result();
		$outbound_start_destination_id = $res[0]->id;

		$this->db->select('id');
		$query = $this->db->get_where('Venues', array('name' => $outbound_end_destination));
		$res = $query->result();
		$outbound_end_destination_id = $res[0]->id;

		$this->db->select('id');
		$query = $this->db->get_where('Venues', array('name' => $inbound_start_destination));
		$res = $query->result();
		$inbound_start_destination_id = $res[0]->id;

		$this->db->select('id');
		$query = $this->db->get_where('Venues', array('name' => $inbound_end_destination));
		$res = $query->result();
		$inbound_end_destination_id = $res[0]->id;

		$data = array(
			'date_modified' => date('Y-m-d G:i:s'),
			'start_destination_id' => $outbound_start_destination_id,
			'end_destination_id' => $outbound_end_destination_id,
			'passengers' => $this->input->post('outbound_passengers'),
			'date' => $this->input->post('outbound_date'),
			'time_of_day' => $this->input->post('outbound_time_of_day'),
			'extra_time' => $this->input->post('outbound_extra_time'),

			'email' => $this->input->post('email'),
			'contact_phone' => $this->input->post('contact_phone'),
			'passenger_phone' => $this->input->post('passenger_phone'),
			'passenger_first_name' => $this->input->post('passenger_first_name'),
			'passenger_last_name' => $this->input->post('passenger_last_name'),
			'agree' => true,
			'name_on_card' => $this->input->post('name_on_card'),
			'card_number' => $this->input->post('card_number'),
			'expiry' => $this->input->post('expiry'),
			'security_number' => $this->input->post('security_number')
		);

		$this->db->insert('Bookings', $data);

		if($this->input->post('direction') == 'single'){ return; };

		$data = array(
			'date_modified' => date('Y-m-d G:i:s'),
			'start_destination_id' => $inbound_start_destination_id,
			'end_destination_id' => $inbound_end_destination_id,
			'passengers' => $this->input->post('inbound_passengers'),
			'date' => $this->input->post('inbound_date'),
			'time_of_day' => $this->input->post('inbound_time_of_day'),
			'extra_time' => $this->input->post('inbound_extra_time'),

			'email' => $this->input->post('email'),
			'contact_phone' => $this->input->post('contact_phone'),
			'passenger_phone' => $this->input->post('passenger_phone'),
			'passenger_first_name' => $this->input->post('passenger_first_name'),
			'passenger_last_name' => $this->input->post('passenger_last_name'),
			'agree' => true,
			'name_on_card' => $this->input->post('name_on_card'),
			'card_number' => $this->input->post('card_number'),
			'expiry' => $this->input->post('expiry'),
			'security_number' => $this->input->post('security_number')
		);

		$this->db->insert('Bookings', $data);
	}

	function get_team_bookings($id) {
		$this->db->select('
			Bookings.id,
			Bookings.passenger_first_name,
			Bookings.passenger_last_name,
			Teams.vessel,
			v1.name as start_destination,
			v2.name as end_destination	
		');
		$this->db->from('Bookings');
		$this->db->join('Teams', 'Teams.id = Bookings.team_id');
		$this->db->join('Venues as v1', 'v1.id = Bookings.start_destination_id');
		$this->db->join('Venues as v2', 'v2.id = Bookings.end_destination_id');
		$this->db->where('Bookings.team_id', $id);
		$team_bookings = $this->db->get()->result();

		return($team_bookings);
	}

	function get_customer($id){
		 $customer = $this->db->get_where('Customers', array('id' => $id))->result();
		 return($customer);
	}

	function get_customer_names() {
		$this->db->select('firstname, lastname, id');
		$this->db->from('Customers');
		$names = $this->db->get()->result();
		return($names);
	}

	function get_customer_bookings($id) {
		$this->db->select('
			Bookings.id,
			Bookings.date, 
			Bookings.time_of_day, 
			v1.name as start_destination, 
			v2.name as end_destination
		');
		$this->db->from('Bookings');
		$this->db->join('Venues as v1', 'v1.id = Bookings.start_destination_id');
		$this->db->join('Venues as v2', 'v2.id = Bookings.end_destination_id');
		$this->db->where('Bookings.customer_id', $id);
		$customer_bookings = $this->db->get()->result();
		return($customer_bookings);
	}
}
