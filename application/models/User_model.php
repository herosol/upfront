<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_model extends CRUD_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->table_name = "tbl_users";
        $this->field = "user_id";
    }

    function getMember($user_id, $where = '')
    {
        if(!empty($where))
            $this->db->where($where);
        $this->db->where('user_id', $user_id);
        $query = $this->db->get($this->table_name);
        return $query->row();
    }

    function getMembers($where = '', $start = '', $offset = '', $order_by = '')
    {
        if (!empty($where))
            $this->db->where($where);
        if (!empty($order_by))
            $this->db->order_by("user_id", $order_by);
        if (!empty($offset))
            $this->db->limit($offset, $start);

        $query = $this->db->get($this->table_name);
        return $query->result();
    }

    function get_members_by_order($where = '', $start = '', $offset = '', $order_field = 'user_id', $order_by = '')
    {

        $this->db->select("*, (SELECT AVG(rating) FROM `tbl_reviews` `r` WHERE `r`.`user_id`=`tbl_members`.`user_id`) as rating");
        if (!empty($where))
            $this->db->where($where);
        if (!empty($order_by))
            $this->db->order_by($order_field, $order_by);
        if (!empty($offset))
            $this->db->limit($offset, $start);

        $query = $this->db->get($this->table_name);
        return $query->result();
    }

    function get_active_members()
    {

        $this->db->where(array('user_status' => 1, 'user_verified' => 1));
        $this->db->order_by("user_id", $order_by);

        $query = $this->db->get($this->table_name);
        return $query->result();
    }


    function get_player($user_id)
    {

        $this->db->where(array('user_status' => 1, 'user_verified' => 1, 'user_player_verified' => 1, 'user_type' => 'player'/*, 'user_phone_verified' => '1'*/));
        $this->db->where("user_id", $user_id);

        $query = $this->db->get($this->table_name);
        return $query->row();
    }
    
    /*
    function delete($user_id)
    {
        $this->db->where('user_id', $user_id);
        $this->db->delete($this->table_name);
    }
    
    function save($vals, $user_id = '')
    {
        $this->db->set($vals);
        if ($user_id != '') {
            $this->db->where('user_id', $user_id);
            $this->db->update($this->table_name);
            return $user_id;
        } else {
            $this->db->insert($this->table_name);
            //return $this->db->last_query(); 
            return $this->db->insert_id();
        }
    }
    */
    
    function oldPswdCheck($user_id, $user_pswd)
    {
        $user_pswd = doEncode($user_pswd);
        $this->db->where('user_id', $user_id);
        $this->db->where('user_pswd', $user_pswd);
        $query = $this->db->get($this->table_name);
        return $query->row();
    }

    function search_members($post)
    {
        // $this->db->select('mem.*, ms.price, s.price_label, (SELECT AVG(rating) FROM `tbl_reviews` where `tbl_reviews`.user_id=mem.user_id and parent_id is NULL) as user_avg_rating');
        $this->db->from($this->table_name.' mem');
        $this->db->join('characters c', "FIND_IN_SET(c.id, mem.user_characters) > 0");
        if (!empty($post['character'])) {
            $this->db->group_start()
            // ->where("subject_id in(select id from tbl_subjects where name like '".$this->db->escape_like_str($post['subject'])."%')")
            ->like('c.title', $post['character'], 'both')
            ->or_like('mem.user_profile_heading', $post['character'], 'both')
            ->or_like('mem.user_fname', $post['character'], 'both')
            ->or_like('mem.user_lname', $post['character'], 'both')
            ->group_end();
        }

        if (!empty($post['price'])) {
            $ary = @explode(';', $post['price']);
            $min_rate = floatval(trim($ary[0]));
            $max_rate = floatval(trim($ary[1]));
            $this->db->where("( mem.user_rate >= $min_rate AND mem.user_rate <= $max_rate ) ", null, false);
        }
        
        /*
        if (isset($keywords['gender']) && count($keywords['gender']) > 0) {
            $genders = $keywords['gender'];

            foreach ($genders as $gen) {
                $where_type[] = " (gender LIKE '%$gen%')";
            }
            if (count($where_type) > 0) {
                $where_type_string = @implode(' OR ', $where_type);
            }
            $this->db->where(" ( " . $where_type_string . " ) ", null, false);
        }

        if (isset($keywords['gender']) && count($keywords['gender']) > 0) {
            $genders = $keywords['gender'];

            foreach ($genders as $gen) {
                $where_type[] = " (p.gender LIKE '%$gen%')";
            }
            if (count($where_type) > 0) {
                $where_type_string = @implode(' OR ', $where_type);
            }
            $this->db->where(" ( " . $where_type_string . " ) ", null, false);
        }
        */

        $this->db->where('mem.user_type', 'player');
        $this->db->where('mem.user_verified', 1);
        $this->db->where('mem.user_status', 1);
        // $this->db->where('mem.user_phone_verified', 1);
        $this->db->where('mem.user_player_verified', 1);

        if (!empty($post['city']))
            $this->db->like('mem.user_city', $post['city']);
        if (!empty($post['country']))
            $this->db->where("FIND_IN_SET('".$post['country']."', mem.user_availability) >0");
            // $this->db->where('mem.user_country_id', $post['country']);

        if (!empty($post['zip'])){
            $coordinates = get_location_detail($post['zip']);
            $post['lat'] = $coordinates->Latitude;
            $post['lng'] = $coordinates->Longitude;
        }
        
        /*if (!empty($post['lat']) && !empty($post['lng'])) {
            $d=intval($post['distance']);
            $this->db->select("mem.*, (69.0 * DEGREES(ACOS(COS(RADIANS({$post['lat']}))
                      * COS(RADIANS(mem.user_map_lat))
                      * COS(RADIANS({$post['lng']}) - RADIANS(mem.user_map_lng))
                        + SIN(RADIANS({$post['lat']}))
                      * SIN(RADIANS(mem.user_map_lat))))) AS distance, (SELECT AVG(rating) FROM `tbl_reviews` where `tbl_reviews`.user_id = mem.user_id and parent_id is NULL) as user_avg_rating
                        ");
            $this->db->having('mem.user_travel_radius >= distance');
            $this->db->having('distance<=',  50);
        }
        else*/
            $this->db->select('mem.*, (SELECT AVG(rating) FROM `tbl_reviews` where `tbl_reviews`.user_id = mem.user_id and parent_id is NULL) as user_avg_rating');

        /*if (!empty($post['sort']) && in_array($post['sort'], array('asc', 'desc'))) 
            $this->db->order_by('mem.user_hourly_rate', $post['sort']);*/
        
        $this->db->group_by('mem.user_id');
        // $this->db->order_by('mem.user_membership_pref', 'desc');
        return $this->db->get()->result();

        /*$query = $this->db->get();
        $rows = array();
        foreach ($query->result() as $key => $row) {
            $rows[$key] = $row;
            $rows[$key]->total_favorites = $this->total_favorites($row->id);
        }
        return $rows;*/
    }


    function changeStatus($user_id)
    {
        $this->db->where('user_id', $user_id);
        $query = $this->db->get($this->table_name);
        $rs = $query->row();

        if ($rs->user_status == '0') {
            $vals['user_status'] = '1';
        } else {
            $vals['user_status'] = '0';
        }
        $this->db->set($vals);
        $this->db->where('user_id', $user_id);
        $this->db->update($this->table_name);
        return $vals['user_status'];
    }


    function emailExists($user_email, $user_id = 0)
    {
        $this->db->where('user_email', $user_email);
        $this->db->where('user_id <> ' . $user_id);
        $query = $this->db->get($this->table_name);
        return $query->row();
    }

    function phoneExists($user_phone, $user_id = 0)
    {
        $this->db->where('user_phone', $user_phone);
        $this->db->where('user_id <> ' . $user_id);
        $query = $this->db->get($this->table_name);
        return $query->row();
    }

    function forgotEmailExists($user_email)
    {
        $this->db->where('user_email', $user_email);
        $this->db->where('user_status', '1');
        $this->db->where('user_verified', '1');
        $query = $this->db->get($this->table_name);
        return $query->row();
    }

    function memberExists($user_keyword)
    {
        $this->db->where('user_email', $user_keyword);
        $this->db->or_where('user_username', $user_keyword);
        $query = $this->db->get($this->table_name);
        return $query->row();
    }

    function usernameExists($user_username)
    {
        $this->db->where('user_username', $user_username);
        $query = $this->db->get($this->table_name);
        return $query->row();
    }

    function ipExists($user_id, $user_ip)
    {
        if (!empty($user_ip)) {
            $this->db->where("user_id <> " . $user_id);
            $this->db->where('user_ip', $user_ip);
            $query = $this->db->get($this->table_name);
            if ($query->row())
                return true;
        }
        return false;
    }

    function socialIdExists($user_type, $user_id)
    {
        $this->db->where('user_social_type', $user_type);
        $this->db->where('user_social_id', $user_id);
        $query = $this->db->get($this->table_name);
        return $query->row();
    }

    function getMemCode($user_code, $user_id = 0)
    {
        if($user_id>0)
            $this->db->where('user_id', $user_id);
        $this->db->where('user_code', $user_code);
        $query = $this->db->get($this->table_name);
        return $query->row();
    }

    function authenticate($user_email, $user_pswd, $user_type = NULL) {
        $user_pswd = doEncode($user_pswd);
        if (!empty($user_type))
            $this->db->where('user_type', $user_type);

        $this->db->where('user_email', $user_email);
        $this->db->where('user_pswd', $user_pswd);
        // $this->db->where('user_status', '1');
        $query = $this->db->get($this->table_name);
        // return $this->db->last_query();
        return $query->row();
    }
    function update_last_login($id, $token = '')
    {
        /*
        $this->db->where('user_id', $id);
        $query = $this->db->get($this->table_name);
        $rs = $query->row();
        */

        // $this->session->set_userdata('last_login', array('ip' => $rs->site_ip, 'time_date' => $rs->site_lastlogindate));

        // $vals['user_ip'] = $_SERVER["REMOTE_ADDR"];
        if(!empty($token))
            $vals['user_remember'] = $token;

        $vals['user_token'] = $this->session->session_id;
        $vals['user_last_login'] = date('Y-m-d h:i:s');
        $this->save($vals, $id);
    }

    function get_max_rate()
    {
        $this->db->select_max('user_rate');
        $query = $this->db->get('members');
        return floatval($query->row()->user_rate);
    }

    function get_max_distance()
    {
        $this->db->select_max('user_travel_radius');
        $query = $this->db->get($this->table_name);
        return floatval($query->row()->user_travel_radius);
    }
}
?>

