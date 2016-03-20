<?php

class Affiliate_model extends CI_Model
{
	function __construct() {
		parent::__construct();
	}

	function get_affiliate_info($id) {
		$query = $this->db->get_where('Affiliates', array('id' => $id));
		$res = $query->result();
		return $res[0];
	}

	function get_affiliate_id() {
		$this->db->select('id');
		$query = $this->db->get_where('Affiliates', array('company' => $this->input->post('search_name')));
		$res = $query->result();
		$affiliate = $res[0];
		return $affiliate->id;
	}

	function update_affiliate($id) {
		$old = $this->get_affiliate_info($id);
		
		# Converting checkbox to boolean
		if($this->input->post('active') === 'on') {
			$active = true;
		} else {
			$active = false;
		}

		# Constructing database entry
		$data = array(
			'id' => $id,
			'company' => $this->input->post('company'),
			'contact' => $this->input->post('contact'),
			'phone' => $this->input->post('phone'),
			'url' => $this->input->post('url'),
			'email' => $this->input->post('email'),
			'comments' => $this->input->post('comments'),
			'active' => $active,
			'date_modified' => date('Y-m-d G:i:s'),
			'date_created' => $old->date_created
		);

		$this->db->replace('Affiliates', $data);
	}

	function create_affiliate() {
		$data = array(
			'company' => 'New affiliate'
		);

		$this->db->insert('Affiliates', $data);
		return $this->db->insert_id();
	}

	function delete_affiliate($id) {
		$this->db->where('id', $id);
		$this->db->delete('Affiliates');
	}

	function get_affiliate_names() {
		$this->db->select('company');
		$query = $this->db->get('Affiliates');
		return $query->result();	
	}	
}
