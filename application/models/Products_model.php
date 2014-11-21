<?php
class Products_model extends Model {

	function get_all() {

		$results = $this->db->get('products')->result();

		return $results;
	}


	function get($id) {

		$results = $this->db->get_where('products', array('id' => $id))->result();
		$result = $results[0];
		return $result;		
	}
}