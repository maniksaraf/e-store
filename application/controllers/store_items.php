<?php
class Store_items extends CI_Controller {


	function index() {
		$this->load->view('admin');
		$this->load->view('home');
	}
	function manage() {
		$data['view_file'] = 'manage';
		$this->load->view('manage');

	}

	function back() {
		redirect('store_items/index');
	}
	function get_data_db(){
		$query; 

	}

	function _display_items_table() {
		$query = $this->get('item_name');
		$this->load->view('items_table', $data);
	}
	function get_data_post() {
		$data['item_name'] = $this->input->post('item_name', TRUE);
		$data['item_price'] = $this->input->post('item_price', TRUE);
		$data['item_description'] = $this->input->post('item_description', TRUE);

		return $data;
	}
	function create() {
		$data = $this->get_data_post();

		$current_url = current_url();
		$data['form_location'] = str_replace('/create', '/submit', $current_url);

		$flash = $this->session->flashdata('item');
		if ($flash!="") {
			$data['flash'] = $flash;
		}

		$template = 'admin';
		$data['view_file'] = 'create';
		$this->load->view('create', $data);

		
	}

	function submit() {

		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');

		$this->form_validation->set_rules('item_name', 'Name', 'required');
		$this->form_validation->set_rules('item_price', 'Price', 'is_numeric|required');
		$this->form_validation->set_rules('item_description', 'Description', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->create();
		}
		else
		{
			$data = $this->get_data_post();
			$value = "<p style='color: green;'>The item was created.</p>";
			$this->session->set_flashdata('item', $value);
			redirect('store_items/create');
		}

	}
}