<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mvideo_model extends CRUD_model {

    public function __construct() {
    	parent::__construct();
        $this->table_name = "motivational_videos";
        $this->field = "id";
    }
}
?>

