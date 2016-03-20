<?php

class Affiliate extends CI_Controller
{
	function __construct() {
		parent::__construct();	
		$this->load->helper('url');
		$this->load->model('affiliate_model');
	}

	function affiliate_index($id = 1) {
		$data['page_title'] = 'Affiliates';
		$data['affiliate_info'] = $this->affiliate_model->get_affiliate_info($id);
		$data['affiliate_names'] = $this->affiliate_model->get_affiliate_names();

		$this->load->view('header', $data);
		$this->load->view('navbar');
		$this->load->view('affiliates', $data);
		$this->load->view('footer');
	}

	function search_affiliate() {
		$id = $this->affiliate_model->get_affiliate_id();
		$this->affiliate_index($id);
	}

	function save_affiliate($id) {
		$this->affiliate_model->update_affiliate($id);
		$this->affiliate_index($id);
	}

	function new_affiliate() {
		$id = $this->affiliate_model->create_affiliate();
		$this->affiliate_index($id);
	}

	function delete_affiliate($id) {
		$this->affiliate_model->delete_affiliate($id);
		$this->affiliate_index(1);
	}
}
