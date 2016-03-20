<?php

class Venue_model extends CI_Model {
	function __construct() {
		parent::__construct();	
	}

//  DAN - I ADDED ADDITIONAL COLUMNS TO THE SELECT BELOW

	function get_venue_names() {
		$this->db->select('name, price, zone, loading');
		$this->db->order_by('name', 'ASC');
		$query = $this->db->get('Venues');
		return $query->result();
	}

	function get_venue_data($id) {
		$query = $this->db->get_where('Venues', array('id' => $id));
		$res = $query->result();
		return $res[0];
	}

	function get_venue_id(){
		$name = $this->input->post('venue_dropdown');
		$this->db->select('id');
		$query = $this->db->get_where('Venues', array('name' => $name));
		$res = $query->result();
		$venue = $res[0];
		return $venue->id;
	}

	function update_venue($id) {
		$old = $this->get_venue_data($id);

		$data = array(
			'id' => $id,
			'date_created' => $old->date_created,
			'date_modified' => date('Y-m-d G:i:s'),
			'name' => $this->input->post('name'),
			'comments' => $this->input->post('comments'),
			'price' => $this->input->post('price'),
			'zone' => $this->input->post('zone'),
			'loading' => $this->input->post('loading')
		);

		$this->db->replace('Venues', $data);
	}

	function create_venue() {
		$data = array(
			'name' => 'New Venue'
		);

		$this->db->insert('Venues', $data);

		return $this->db->insert_id();
	}
	
	// DAN - I ADDED THIS 
	
	function delete_venue($id) {
		$this->db->where('id', $id);
		$this->db->delete('Venues');
	}
	
	
}
