<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Withdraw_model extends CRUD_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->table_name = "withdraws";
        $this->field = "id";
    }

    function get_earning_pending()
    {
        $this->db->select('mem.user_fname as cfname, mem.user_lname as clname, e.*');
        $this->db->from('users mem');
        $this->db->join('bookings b', 'b.booked_member=mem.user_id');
        $this->db->join('earnings e', 'e.booking_id=b.id');
        $this->db->where(['b.booked_member'=> $this->session->user_id, 'e.status'=> 'pending']);
        $this->db->order_by('e.id', 'DESC');
        return $this->db->get()->result();
    }

    function get_earning()
    {
        $this->db->select('mem.user_fname as cfname, mem.user_lname as clname, e.*');
        $this->db->from('users mem');
        $this->db->join('bookings b', 'b.booked_member=mem.user_id');
        $this->db->join('earnings e', 'e.booking_id=b.id');
        $this->db->where(['b.booked_member'=> $this->session->user_id]);
        $this->db->order_by('e.id', 'DESC');
        return $this->db->get()->result();
    }

    function get_avail_balance()
    {
        $this->db->select('SUM(e.amount) as availBalance');
        $this->db->from('bookings b');
        $this->db->join('earnings e', 'e.booking_id=b.id');
        $this->db->where(['b.booked_member'=> $this->session->user_id, 'e.status'=> 'available']);
        return $this->db->get()->row()->availBalance;
    }

    function get_requested_balance()
    {
        $this->db->select('SUM(e.amount) as requestedBalance');
        $this->db->from('bookings b');
        $this->db->join('earnings e', 'e.booking_id=b.id');
        $this->db->where(['b.booked_member'=> $this->session->user_id, 'e.status'=> 'requested']);
        return $this->db->get()->row()->requestedBalance;
    }

    function get_earning_available()
    {
        $this->db->select('mem.user_fname as cfname, mem.user_lname as clname, e.*');
        $this->db->from('users mem');
        $this->db->join('bookings b', 'b.booked_member=mem.user_id');
        $this->db->join('earnings e', 'e.booking_id=b.id');
        $this->db->where(['b.booked_member'=> $this->session->user_id, 'e.status'=> 'available']);
        $this->db->order_by('e.id', 'DESC');
        return $this->db->get()->result();
    }

    
    function get_payouts()
    {
        $this->db->select('SUM(e.amount) as payouts');
        $this->db->from('bookings b');
        $this->db->join('earnings e', 'e.booking_id=b.id');
        $this->db->where(['b.booked_member'=> $this->session->user_id, 'e.status'=> 'paid']);
        return $this->db->get()->row()->payouts;
    }

    function get_withdrawal_detail($withdraw_id, $where = '')
    {
        $this->db->select("e.*");
        $this->db->from("withdrawal_detail wd");
        $this->db->join('earnings e', "e.id=wd.earning_id");
        if(!empty($where))
            $this->db->where($where);
        $this->db->where('withdraw_id', $withdraw_id);
        return  $this->db->get()->result();
    }

}
?>

