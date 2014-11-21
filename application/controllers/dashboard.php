<?php
class Dashboard extends CI_Controller {

	function index() {
		$template = "admin";
		$data['view_file'] = 'home';
		$this->load->view('admin');
		$this->load->view('home', $data);
	}
	
}