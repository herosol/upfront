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

}
?>

