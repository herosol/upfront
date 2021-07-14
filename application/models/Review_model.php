<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Review_model extends CRUD_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->table_name = "tbl_reviews";
        $this->field = "id";
    }

    function get_reviews($booking_id)
    {
        $this->db->select('u1.user_fname as mem_fname, u1.user_lname as mem_lname, u1.mem_image as mem_image, u2.user_fname as rater_fname, u2.user_lname as rater_lname, u2.mem_image as rater_image, r.*');
        $this->db->from($this->table_name.' r');
        $this->db->join('users u1', 'u1.user_id=r.mem_id');
        $this->db->join('users u2', 'u2.user_id=r.rating_by');
        $this->db->where(['r.booking_id'=> $booking_id, 'parent_id'=> '0']);
        $this->db->order_by('r.id', 'DESC');
        return $this->db->get()->result();
    }

    function get_review($review_id)
    {
        $this->db->select('u1.user_fname as mem_fname, u1.user_lname as mem_lname, u1.mem_image as mem_image, u2.user_fname as rater_fname, u2.user_lname as rater_lname, u2.mem_image as rater_image, r.*');
        $this->db->from($this->table_name.' r');
        $this->db->join('users u1', 'u1.user_id=r.mem_id');
        $this->db->join('users u2', 'u2.user_id=r.rating_by');
        $this->db->where(['r.id'=> $review_id]);
        return $this->db->get()->row();
    }

    function get_mem_reviews($mem_id)
    {
        $this->db->select('u1.user_fname as mem_fname, u1.user_lname as mem_lname, u1.mem_image as mem_image, u2.user_fname as rater_fname, u2.user_lname as rater_lname, u2.mem_image as rater_image, r.*');
        $this->db->from($this->table_name.' r');
        $this->db->join('users u1', 'u1.user_id=r.mem_id');
        $this->db->join('users u2', 'u2.user_id=r.rating_by');
        $this->db->where(['r.mem_id' => $mem_id, 'parent_id'=> '0']);
        $this->db->order_by('r.id', 'DESC');
        return $this->db->get()->result();
    }

    function get_reviews_avg($mem_id)
    {
        $this->db->select('AVG(rating) as avg_rating');
        return $this->db->get($this->table_name)->row()->avg_rating;
    }
}
?>

