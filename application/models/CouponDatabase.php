<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CouponDatabase extends CI_Model
{
    public function getCoupon()
    {
        $getCoupon = $this->db->query('select * from coupon')->result_array();
        return $getCoupon;
    }
}