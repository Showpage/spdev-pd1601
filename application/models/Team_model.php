<?php

class Team_model extends CI_Model
{
	function __construct() {
		parent::__construct();
	}

	function get_team_info($id) {
		$query = $this->db->get_where('Teams', array('id' => $id));
		$res = $query->result();
		return $res[0];
	}

	function find_team() {
		$this->db->select('id');
		$query = $this->db->get_where('Teams', array('vessel' => $this->input->post('vessel_search')));
		$res = $query->result();
		return $res[0]->id;
	}

	function get_team_list() {
		$this->db->select('vessel');
		$this->db->order_by('vessel', 'ASC');
		$query = $this->db->get('Teams');
		return $query->result();
	}
	
	function get_vessel_and_capacity() {
		$this->db->select('vessel, capacity');
		$this->db->order_by('vessel', 'ASC');
		$query = $this->db->get('Teams');
		return $query->result();
	}

	function update_team($id) {
		$old = $this->get_team_info($id);

		# Converting checkbox value to boolean 
		if($this->input->post('active') === 'on') {
			$active = true;
		} else {
			$active = false;
		}

		# Constructing entry
		$data = array(
			'id' => $id,
			'vessel' => $this->input->post('vessel'),
			'owner' => $this->input->post('owner'),
			'phone' => $this->input->post('phone'),
			'email' => $this->input->post('email'),
			'mobile' => $this->input->post('mobile'),
			'capacity' => $this->input->post('capacity'),
			'active' => $active,
			'comments' => $this->input->post('comments'),
			'date_created' => $old->date_created,
			'date_modified' => date('Y-m-d G:i:s')
		);

		$this->db->replace('Teams', $data);
	}

	function delete_team($id) {
		$this->db->where('id', $id);
		$this->db->delete('Teams');
	}

	function new_team() {
		$data = array(
			'vessel' => 'New vessel'
		);

		$this->db->insert('Teams', $data);
		return $this->db->insert_id();
	}
}
