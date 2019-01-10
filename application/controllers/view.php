<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');	
		$this->load->model('m_user');
	}
	public function index()
	{
		$data['nav'] = "index";
		$data2['slider'] = $this->m_user->loadslider()->result();
		$data2['latest'] = $this->m_user->loadlatest(4)->result();
		$this->load->view('head');
		$this->load->view('navbar', $data);
		$this->load->view('index', $data2);
		$this->load->view('footer');
	}
	public function shop()
	{
		$this->load->library('pagination');
		$config['base_url'] = site_url('view/shop'); //site url
        $config['total_rows'] = $this->db->count_all('tbl_product'); //total row
        $config['per_page'] = 6;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        $config['first_link']       = false;
        $config['last_link']        = false;
        $config['next_link']        = '<i class="fa fa-angle-double-right"></i>';
        $config['prev_link']        = '<i class="fa fa-angle-double-left"></i>';
        $config['full_tag_open']    = '<ul class="pagination">';
        $config['full_tag_close']   = '</ul>';
        $config['num_tag_open']     = '<li class="page-item">';
        $config['num_tag_close']    = '</li>';
        $config['cur_tag_open']     = '<li class="page-item active"><a href="#" class="page-link">';
        $config['cur_tag_close']    = '</a></li>';
        $config['attributes'] = array('class' => 'page-link');
        $config['next_tag_open']    = '<li class="page-item">';
        $config['next_tagl_close']  = '</li>';
        $config['prev_tag_open']    = '<li class="page-item">';
        $config['prev_tagl_close']  = '</li>';

        $this->pagination->initialize($config);
        $data2['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $data2['product'] = $this->m_user->loadshop($config["per_page"], $data2['page'])->result();
        $data2['pagination'] = $this->pagination->create_links();

		$data['nav'] = "shop";
		$this->load->view('head');
		$this->load->view('navbar', $data);
		$this->load->view('shop', $data2);
		$this->load->view('footer');
	}
	public function shopdetail()
	{
		$data2['shop'] = $this->m_user->loaddetailshop($this->uri->segment(3))->result();
		$data['nav'] = "shop";
		$data2['latest'] = $this->m_user->loadlatest(3)->result();
		$this->load->view('head');
		$this->load->view('navbar', $data);
		$this->load->view('shopdetail', $data2);
		$this->load->view('footer');
	}
	public function cart()
	{
		$data['nav'] = "cart";
		$this->load->view('head');
		$this->load->view('navbar', $data);
		$this->load->view('cart');
		$this->load->view('footer');
	}
	public function register()
	{
		$data['nav'] = "register";
		$this->load->view('head');
		$this->load->view('navbar', $data);
		$this->load->view('register');
		$this->load->view('footer');
	}
	public function editaccount()
	{
		$data['nav'] = "account";
		$this->load->view('head');
		$this->load->view('navbar', $data);
		$this->load->view('editaccount');
		$this->load->view('footer');
	}
	public function order()
	{
		$data['nav'] = "order";
		$this->load->view('head');
		$this->load->view('navbar', $data);
		$this->load->view('order');
		$this->load->view('footer');
	}
	public function checkout()
	{
		$data['nav'] = "cart";
		$this->load->view('head');
		$this->load->view('navbar', $data);
		$this->load->view('checkout');
		$this->load->view('footer');
	}
}
