<?php 
	class Admin extends CI_Controller{

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
			$this->load->view("admin/admin-view",$data);
		}

		public function login(){
			$info = $this->session->userdata('adminInfo');
			if(!empty($info))
				header('location: http://localhost/mtp/index.php/admin');
		
			$name = $this->input->post('fusername');
			$pass = $this->input->post('fpass');
			$data["check"] = $this->Madmin->checkLogin($name, $pass);
			if ($data['check'] == 1){
				$adminData = $name;
				$this->session->set_userdata('adminInfo', $adminData);
				header('location: http://localhost/mtp/index.php/admin');
			}
			
			$this->load->view("admin/login-admin",$data);
		}

		public function logout(){
			$this->session->unset_userdata('adminInfo');
			header('location: http://localhost/mtp/index.php/admin/login');
		}
	}
?>