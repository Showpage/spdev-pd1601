<?php

class Rules_model extends CI_Model
{
	function __construct() {
		parent::__construct();
	}

	function update_language() {
		$keys = array_keys($this->input->post());

		# Post input converts spaces to underscores. 
		# Convert back to spaces
		$key_name = str_replace('_', ' ', $keys[0]);

		$value = $this->input->post($keys[0]);
		$update_data = array('key_name' => $key_name, 'value' => $value);

		$this->db->replace('Language', $update_data);
	}

	function get_language_info() {
		$query = $this->db->get('Language');
		return $query->result();
	}
}
