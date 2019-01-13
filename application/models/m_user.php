<?php

class M_user extends CI_Model{
	function loadslider(){
		return $this->db->get('tbl_slider');
	}
	function loadlatest($limit){
		return $this->db->get('tbl_product', $limit);
	}
	function loadshop($limit, $start){
		return $this->db->get('tbl_product', $limit, $start);
	}
	function loaddetailshop($id){
		$this->db->select('*');
		$this->db->from('tbl_product');
		$this->db->where('id_product', $id);
		$this->db->join('tbl_product_category', 'tbl_product_category.id_cat_p = tbl_product.id_cat_p');
		$query = $this->db->get();
		return $query;
	}
  function loadcart($id){
		$this->db->select('*');
		$this->db->from('tbl_cart');
		$this->db->where('id_customer', $id);
		$this->db->join('tbl_product', 'tbl_product.id_product = tbl_cart.id_product');
		$query = $this->db->get();
		return $query;
	}
  function totalcart($id){
		$this->db->select('SUM(product_price * quantity) AS total');
		$this->db->from('tbl_cart');
		$this->db->where('id_customer', $id);
		$this->db->join('tbl_product', 'tbl_product.id_product = tbl_cart.id_product');
		$query = $this->db->get();
		return $query;
	}
  function cek_login($table,$where){
		return $this->db->get_where($table,$where);
	}
  function addcart($data){
		$this->db->insert('tbl_cart',$data);
	}
  function addorder($data){
		$this->db->insert('tbl_order',$data);
	}
}
