<?php 
class AdminProduct extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper("url");
		$this->load->library("session");
		$this->load->model("Madmin");
	}

	public function index(){
		$info = $this->session->userdata('adminInfo');
		$data['info'] = $info;
		$data['admin'] = $this->Madmin->select($info);
		if(empty($info))
			header('location: http://localhost/mtp/index.php/admin/login');
		$this->load->view("admin/product",$data);
	}
}
?>