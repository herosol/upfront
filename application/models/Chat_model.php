<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Chat_model extends CRUD_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->table_name = "tbl_chatrooms_chat";
        $this->field = "room_id";
    }
    
    function ifChatroomExist($user_id, $receiver_id)
    { 
        $roomParticipants = sort_chat_participants($user_id, $receiver_id);

        $this->db->select('room_id');
        $this->db->from('chatrooms');
        $this->db->where('participants', $roomParticipants);
        return $this->db->get()->row()->room_id;
    }

    function getRelatedChats()
    {
        $this->db->select('*');
        $this->db->from('chatrooms');
        $this->db->where('FIND_IN_SET('.$this->session->user_id.', participants)');
        return $this->db->get()->result();
    }

}
?>

