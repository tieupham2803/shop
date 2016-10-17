<?php
class Users extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->helper("url");
		$this->load->library("session");
		$this->load->database();
		$this->load->Model('Mshop');
	}

	public function index(){
		$info = $this->session->userdata('userInfo');
		if(empty($info))
			header('location: http://localhost/mtp/index.php/users/login');
		$data["email"] = $info;		
		$catalog_array = $this->Mshop->getCatalog();
		$data["catalog"] = $catalog_array;
		// Get Product
		$config['base_url'] = 'http://localhost//mtp/index.php/users/index';
		$config['total_rows'] = $this->Mshop->count_product();
		$config['per_page'] = 8;
        $config['uri_segment'] = 3;
        $config['num_links'] = 2;

        //Custom pagination css
        $config['full_tag_open'] = '<nav><ul class="pagination">';
    	$config['full_tag_close'] = '</ul></nav>';
        $config['first_link'] = '&laquo; First';
        $config['first_tag_open'] = '<li>';
    	$config['first_tag_close'] = '</li>';
    	$config['last_link'] = 'Last &raquo;';
	    $config['last_tag_open'] = '<li>';
	    $config['last_tag_close'] = '</li>';

	    $config['next_link'] = 'Next &rarr;';
	    $config['next_tag_open'] = '<li>';
	    $config['next_tag_close'] = '</li>';

	    $config['prev_link'] = '&larr; Previous';
	    $config['prev_tag_open'] = '<li>';
	    $config['prev_tag_close'] = '</li>';
    	$config['cur_tag_open'] = '<li class="active"><a href="">';
	    $config['cur_tag_close'] = '</a></li>';

	    $config['num_tag_open'] = '<li>';
	    $config['num_tag_close'] = '</li>';
        //////

        $this->load->library('pagination',$config);
        $this->pagination->initialize($config);
		$product_array = $this->Mshop->getProduct($config['per_page'],$this->uri->segment(3));
		$data["product"] = $product_array;

		$this->load->view("shop/shop-view-users",$data);
	}

	public function login(){
		$info = $this->session->userdata('userInfo');
		if(!empty($info))
			header('location: http://localhost/mtp/index.php/users');

		$this->load->model("Musers");
		$email = $this->input->post('fusername');
		$pass = $this->input->post('fpass');
		$data["check"] = $this->Musers->checkLogin($email, $pass);
		if ($data['check'] == 1){
			$userData = $email;
			$this->session->set_userdata('userInfo', $userData);
			header('location: http://localhost/mtp/index.php/users');
		}
		$this->load->view("users/login-user",$data);
	}

	public function logout(){
		$this->session->unset_userdata('userInfo');
		header('location: http://localhost/mtp/index.php/shop');
	}

	public function register(){
		$this->load->view("users/register");
		$this->load->model("Musers");
		$name = $this->input->post('fname');
		$email = $this->input->post('femail');
		$pass = $this->input->post('fpass');

		$data["checkInsert"] = $this->Musers->insertUser($name,$email,$pass);
		if($data["checkInsert"] == 2)
			echo '<p style="color:red;font-size:25px;text-align:center;">Email Is Already Exists</p>';

		if($data["checkInsert"] == 1)
			header('location: http://localhost/mtp/index.php/users/login');
		
	}
	public function infoUser(){
		$info = $this->session->userdata('userInfo');
		if(empty($info))
			header('location: http://localhost/mtp/index.php/users/login');
		$email= $info;

		$this->load->model("Musers");
		$query = $this->Musers->selectInfo($email);
		$data["name"] = $query[0]["name"];
		$data["phone"] = $query[0]["phone"];
		$data["address"] = $query[0]["address"];
		$this->load->view("users/info-user",$data);

		$name = $this->input->post('fname');
		$phone = $this->input->post('fphone');
		$address = $this->input->post('faddress');
		if(!empty($name) && !empty($phone) && !empty($address)){
			$check = $this->Musers->updateInfo($email,$name,$phone,$address);
			header('location: http://localhost/mtp/index.php/users/');
		}
	}

	public function changePass(){
		echo "<h1 style='color:red'>Tính năng này hiện tại không khả dụng. Xin vui lòng quay lại sau!</h1>";
	}
}
	
?>