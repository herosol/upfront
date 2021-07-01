<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mcategories_model extends CRUD_model {

    public function __construct()
    {
    	parent::__construct();
        $this->table_name="model_categories";
        $this->field="id";
    }

}
?>

