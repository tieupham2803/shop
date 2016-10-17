<?php 
class Catalog extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->helper("url");
		$this->load->library("session");
		$this->load->Model("Mshop");
		$this->load->Model("Mcatalog");
	}

	public function index(){
		$data['id'] = $this->input->get('id');
		$catalog_array = $this->Mshop->getCatalog();
		$data["catalog"] = $catalog_array;
		$data['this-name'] = $this->Mcatalog->selectOne($data['id']);
		$data['title'] = $data['this-name']['0']['name'];

		// Get Product
		$config['base_url'] = 'http://localhost//mtp/index.php/catalog/index';
		$config['total_rows'] = $this->Mcatalog->count_product($data['id']);
		$config['per_page'] = 8;
        $config['uri_segment'] = 3;
        $config['num_links'] = 2;
        $config['get'] = '?id='.$data['id'];
        if (count($_GET) > 0) $config['suffix'] = '?' . http_build_query($_GET, '', "&");
        $config['first_url'] = $config['base_url'].'?'.http_build_query($_GET);

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
        $product_array = $this->Mcatalog->getProduct($config['per_page'],$this->uri->segment(3),$data['id']);
		$data["product"] = $product_array;

		$this->load->view("/shop/catalog-view",$data);
	}
}
?>