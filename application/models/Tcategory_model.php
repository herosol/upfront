<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Tcategory_model extends CRUD_model {

    public function __construct(){
    	parent::__construct();
        $this->table_name="topics_categories";
        $this->field="id";
    }
}
?>