<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CouponApi extends CI_Controller {

	public function __construct()
	{
		parent :: __construct();
		$this->load->model('CouponDatabase');
	}

	public function index()
	{
		redirect('CouponApi/coupon');
	}

	public function coupon()
	{
		$this->load->view('coupon');
	}

	public function getCoupon()
	{
		$data = $this->CouponDatabase->getCoupon();
		// print_r($data);
		echo json_encode($data); 
	}
}
