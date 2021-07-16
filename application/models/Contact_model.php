<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Contact_model extends CRUD_model {

    public function __construct()
    {
    	parent::__construct();
        $this->table_name="contact";
        $this->field="id";
    }

}
?>

