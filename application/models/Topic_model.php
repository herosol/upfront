<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Topic_model extends CRUD_model {

    public function __construct()
    {
    	parent::__construct();
        $this->table_name="topics";
        $this->field="id";
    }

    function search_titles($string)
    {
        $this->db->select('title');
        $this->db->from($this->table_name);
        $this->db->like('title', $string);
        return $this->db->get()->result();
    }

    function search_topics($keyword)
    {
        $match = explode(' ', $keyword);
        $this->db->select('tc.title as cat_name, t.*');
        $this->db->from('topics t');
        $this->db->join('topics_categories tc', 't.cat_id=tc.id');
        foreach($match as $key => $value)
        {
            if($key == 0)
                $this->db->like('t.title', $value);
            else
                $this->db->or_like('t.title', $value);
        }
        $this->db->order_by('t.id', 'DESC');
        return $this->db->get()->result();
    }
}
?>

