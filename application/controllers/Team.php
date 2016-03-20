<?php

class Team extends CI_Controller
{
	function __construct() {
		parent::__construct();	
		$this->load->helper('url');
		$this->load->model('team_model');
	}


	function team_index($id=1) {
		$data['page_title'] = 'Teams';
		$data['team_info'] = $this->team_model->get_team_info($id);
		$data['team_list'] = $this->team_model->get_team_list();

		$this->load->view('header', $data);
		$this->load->view('navbar');
		$this->load->view('teams', $data);
		$this->load->view('footer');
	}

	function find_team() {
		$id = $this->team_model->find_team();
		$this->team_index($id);
	}

	function update_team($id) {
		$this->team_model->update_team($id);
		$this->team_index($id);	
	}

	function delete_team($id) {
		$this->team_model->delete_team($id);
		$this->team_index(1);
	}

	function new_team() {
		$id = $this->team_model->new_team();
		$this->team_index($id);
	}
}
