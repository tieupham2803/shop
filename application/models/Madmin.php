<?php
class Madmin extends CI_Model{

	public function __contruct(){
		parent::__contruct();
		$this->load->database();
	}

	public function checkLogin($name, $pass){
		$this->db->select("adminName,password");
		$this->db->where("adminName","$name");
		$this->db->where("password","$pass");
		$query=$this->db->get("admin");
		if($query->num_rows() > 0){	
			return 1;
		}
		return 0;
	}

	public function select($adminName){
		$this->db->where("adminName",$adminName);
		$query = $this->db->get('admin');
		return $query->result_array();
	}
}
?>