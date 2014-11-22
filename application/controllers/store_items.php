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

	function clear1 () {
		$this->db->empty_table('orders');
		redirect('store_items/index');
	}

	function clear2 () {
		$this->db->empty_table('customers');
		redirect('store_items/index');
	}

	function back() {
		redirect('store_items/index');
	}

	function _display_items_table() {
		$query = $this->get('item_name');
		$this->load->view('items_table', $data);
	}

	function get_data_post() {
		$data['name'] = $this->input->post('name', TRUE);
		$data['price'] = $this->input->post('price', TRUE);
		$data['photo_url'] = $this->input->post('photo_url', TRUE);
		$data['description'] = $this->input->post('description', TRUE);


		return $data;
	}

	function edit() {
		$data = $this->get_data_post();
		/*$submit = 
		$data['name'] = $row->name;
		$data['price'] = $row->price;
		$data['photo_url'] = $row->photo_url;
		$data['description'] = $row->description;
		*/
		$current_url = current_url();
		$data['form_location'] = str_replace('/edit', '/submit', $current_url);

		$flash = $this->session->flashdata('item');
		if ($flash!="") {
			$data['flash'] = $flash;
		}

		$template = 'admin';
		$data['view_file'] = 'edit';
		$this->load->view('edit', $data);

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

		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('price', 'Price', 'is_numeric|required');
		$this->form_validation->set_rules('photo_url', 'Image URL', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->create();
		}
		else
		{
			$data = $this->get_data_post();
			$this->db->insert('products', $data);

			$value = "<p style='color: green;'>The item was created.</p>";
			$this->session->set_flashdata('item', $value);
			redirect('store_items/create');
		}

	}
}