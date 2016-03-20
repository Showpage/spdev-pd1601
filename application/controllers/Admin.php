<?php

class Admin extends CI_Controller
{
	function __construct() {
		parent::__construct();	
		$this->load->helper('url');
		$this->load->model('rules_model');
	}

	function login() {
		$data['page_title'] = 'Login';
		$this->load->view('header', $data);
		$this->load->view('login');
		$this->load->view('footer');
	}

	function report_index() {
		$data['page_title'] = 'Reports';
		$this->load->view('header', $data);
		$this->load->view('navbar');
		$this->load->view('reports');
		$this->load->view('footer');
	}

	function rule_index() {
		$data['page_title'] = 'Rules';
		$this->load->view('header', $data);
		$this->load->view('navbar'); 
		$this->load->view('rules');
		$this->load->view('footer');
	}

	function language_index() {
		$data['page_title'] = 'Language';

		# Get language information from the database
		$data['language_rules'] = $this->rules_model->get_language_info(); 

		$this->load->view('header', $data);
		$this->load->view('navbar');
		$this->load->view('language', $data);
		$this->load->view('footer');
	}

	function language_update() {
		$this->rules_model->update_language();
		$this->language_index();
	}
}
