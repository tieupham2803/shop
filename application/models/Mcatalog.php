<?php 
class Mcatalog extends CI_Model{
	public function __contruct(){
		parent::__contruct();
		$this->load->database();
	}

	public function selectOne($id){
		$this->db->where('catalog#',$id);
		$query = $this->db->get('catalog');
		return $query->result_array();
	}

	public function getProduct($total,$start,$catalog){
		$this->db->limit($total, $start);
		$this->db->where("catalog#",$catalog);
		$query = $this->db->get('product');
		return $query->result_array();
	}

	public function count_product($catalog){
		$query = $this->db->where('catalog#',$catalog)->get('product');
		return $query->num_rows();
	}
}
?>