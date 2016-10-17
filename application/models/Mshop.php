<?php 
class Mshop extends CI_Model{

	public function __contruct(){
		parent::__contruct();
		$this->load->database();
	}

	public function getCatalog(){
		// $this->db->where('parent#');
		$query = $this->db->get('catalog');
		return $query->result_array();
	}

	public function getProduct($total,$start){
		$this->db->limit($total, $start);
		$query = $this->db->get('product');
		return $query->result_array();
	}

	public function count_product(){
		return $this->db->count_all('product');
	}
}
?>