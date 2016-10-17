<?php 
class Product extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper("url");
		$this->load->library("session");
		$this->load->Model("Mproduct");
		$this->load->Model("Mshop");
	}

	public function index(){
		$data['id'] = $this->input->get('id');
		$data['catalog'] = $this->Mshop->getCatalog();
		$data['product'] = $this->Mproduct->selectOne($data['id']);
		$this->load->view("product/product-view",$data);
	}
}
?>