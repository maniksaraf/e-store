<?php 
class Template extends CI_Controller {
	
	 function admin($data) {
	 	$this->load->view('admin', $data);
	 }
}