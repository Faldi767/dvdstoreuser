<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	public function index()
	{
		$data['nav'] = "index";
		$this->load->view('head');
		$this->load->view('navbar', $data);
		$this->load->view('index');
		$this->load->view('footer');
	}
	public function shop()
	{
		$data['nav'] = "shop";
		$this->load->view('head');
		$this->load->view('navbar', $data);
		$this->load->view('shop');
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
