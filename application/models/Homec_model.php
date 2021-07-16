<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Homec_model extends CRUD_model {

    public function __construct()
    {
    	parent::__construct();
        $this->table_name="home_cruds";
        $this->field="id";
    }

}
?>

