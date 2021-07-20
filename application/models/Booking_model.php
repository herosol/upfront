<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Booking_model extends CRUD_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->table_name = "tbl_bookings";
        $this->field = "id";
    }

    function get_booking_detail($booking_id)
    {
        $this->db->select('m.user_fname, m.user_lname, b.*');
        $this->db->from($this->table_name.' b');
        $this->db->join('users m', 'b.booked_by=m.user_id');
        $this->db->where(['b.id'=> $booking_id]);
        return $this->db->get()->row();
    }

    function get_bookings()
    {
        $this->db->select('*');
        $this->db->from($this->table_name);
        $this->db->where('booked_by', $this->session->user_id);
        $this->db->or_where('booked_member', $this->session->user_id);
        return $this->db->get()->result();
    }

    function calender_data()
    {
        $this->db->select('*');
        $this->db->from($this->table_name);
        $this->db->where('booked_member', $this->session->user_id);
        return $this->db->get()->result();
    }

    function get_client_transactions()
    {
        $this->db->from('earnings e');
        $this->db->join('bookings b', 'e.booking_id=b.id');
        $this->db->select('e.*, b.booked_member, b.amount as paidAmount');
        $this->db->where(['b.booked_by'=> $this->session->user_id]);
        $this->db->order_by('e.id', 'DESC');
        return $this->db->get()->result();
    }

    function get_client_total_payouts()
    {
        $this->db->from('earnings e');
        $this->db->join('bookings b', 'e.booking_id=b.id');
        $this->db->select('SUM(b.amount) as totalPayout');
        $this->db->where(['b.booked_by'=> $this->session->user_id]);
        return $this->db->get()->row()->totalPayout;
    }
    

}
?>

