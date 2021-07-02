<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Appearence_model extends CRUD_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->table_name = "mem_appearance";
        $this->field = "mem_id";
    }

}
?>

