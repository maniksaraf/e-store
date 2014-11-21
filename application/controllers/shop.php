<?php
class Shop extends CI_Controller {


	function index() {

		$this->load->model('Products_model');

		$data['products'] = $this->Products_model->get_all();

		$this->load->view('products', $data);

	}

	function add() {

		$this->load->model('Products_model');

		$product = $this->Products_model->get($this->input->post('id'));

		$insert = array(
			'id' => $this->input->post('id'),
			'qty' => 1,
			'price' => $product->price,
			'name' => $product->name
			);

		$this->cart->insert($insert);

		redirect('shop');
	}

	function remove($rowid) {

		$this->cart->update(array(
			'rowid' => $rowid,
			'qty' => 0
			));

		redirect('shop');

	} 
}