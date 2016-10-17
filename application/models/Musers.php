<?php
class Musers extends CI_Model{

	public function __contruct(){
		parent::__contruct();
		$this->load->database();
	}

	public function checkLogin($email, $pass){
		$this->db->select("email,password");
		$this->db->where("email","$email");
		$this->db->where("password","$pass");
		$query=$this->db->get("user");
		if($query->num_rows() > 0){	
			return 1;
		}
		return 0;
	}

	public function insertUser($name, $email, $pass){
		$alreadyExists = 2;
		if(empty($name) || empty($email) || empty($pass)){
			return 0;
		}

		$this->db->select('email');
		$this->db->where('email','$email');
		$query = $this->db->get('user');
		if($query->num_rows > 0)
			return $alreadyExists;

		$capnhat = "updating";
		$this->db->set('name',$name);
		$this->db->set('email',$email);
		$this->db->set('password',$pass);
		$this->db->set('phone',$capnhat);
		$this->db->set('address',$capnhat);
		$query2 = $this->db->insert('user');
		if($query2 == true)
			return 1;
		else
			return 0;
	}

	public function selectInfo($email){

		$this->db->select("name,phone,address");
		$this->db->where("email","$email");
		$query=$this->db->get("user");
        return $query->result_array();
	}

	public function updateInfo($email,$name,$phone,$address){
		$this->db->set('name',$name);
		$this->db->set('phone',$phone);
		$this->db->set('address',$address);
		$this->db->where('email',$email);
		$this->db->update('user');
	}
}
?>