<?php

defined('BASEPATH') or exit('No direct script access allowed');

use Twilio\Rest\Client;

class Account extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('appearence_model');
        $this->load->model('skills_model');
        $this->load->model('chat_model');
    }

    function dashboard()
    {
        $this->isMemLogged($this->session->user_type);
        // $this->data['pkg_row'] = $this->package_model->get_row($this->data['mem_data']->mem_package_id);
        if ($this->session->user_type == 'user' || $this->session->user_type == 'model') {
            $this->load->view("artist/dashboard", $this->data);
        }
    }

    function change_email()
    {
        if ($this->input->post()) {
            $res = array();
            $res['frm_reset'] = 0;
            $res['hide_msg'] = 0;
            $res['scroll_to_msg'] = 0;
            $res['status'] = 0;
            $res['redirect_url'] = 0;
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            if ($this->form_validation->run() === FALSE) {
                $res['msg'] = validation_errors();
            } else {
                $post = html_escape($this->input->post());

                if (!$this->user_model->emailExists($post['email'], $this->session->user_id)) {
                    // $rando=doEncode(rand(111111, 999999));
                    $rando = doEncode($this->session->user_id . '-' . $post['email']);
                    $rando = strlen($rando) > 225 ? substr($rando, 0, 225) : $rando;

                    $this->user_model->save(array('mem_code' => $rando, 'user_email' => $post['email'], 'mem_verified' => 0), $this->session->user_id);
                    $verify_link = site_url('verification/' . $rando);

                    $mem_data = array('name' => $this->data['mem_data']->mem_fname . ' ' . $this->data['mem_data']->mem_lname, "email" => $post['email'], "link" => $verify_link);
                    $this->send_site_email($mem_data, 'change_email');

                    $res['redirect_url'] = ' ';

                    $res['msg'] = showMsg('success', 'Email has been changed successful! Please wait.');
                    setMsg('info', getSiteText('alert', 'verify_email'));

                    $res['status'] = 1;
                    $res['frm_reset'] = 1;
                    $res['hide_msg'] = 1;
                } else {
                    $res['msg'] = showMsg('error', 'Email already exists!');
                }
            }
            exit(json_encode($res));
        }
    }

    function delete_gallery_images()
    {
        if ($this->input->post()) {
            $image_id = html_escape($this->input->post('image_id'));
            $deleted_images[] = $image_id;
            $this->session->set_userdata('deleted_images', $deleted_images);
            echo json_encode(['status' => 'success']);
        }
    }

    function profile_settings()
    {
        $this->isMemLogged($this->session->user_type);
        $user_id = $this->session->user_id;
        // $this->load->model('character_model');
        if ($this->input->post()) {
            $res = array();
            $res['hide_msg'] = 0;
            $res['scroll_to_msg'] = 1;
            $res['status'] = 0;
            $res['frm_reset'] = 0;
            $res['redirect_url'] = 0;

            $post = html_escape($this->input->post());

            $this->form_validation->set_message('integer', 'Please select a valid {field}');
            $this->form_validation->set_rules('user_fname', 'First Name', 'required|alpha');
            $this->form_validation->set_rules('user_lname', 'Last Name', 'required|alpha');
            $this->form_validation->set_rules('mem_phone', 'Phone', 'required');
            $this->form_validation->set_rules('mem_dob', 'Date of Birth', 'required');
            $this->form_validation->set_rules('mem_rate', 'Rate', 'required|numeric', array('numeric' => '{field} should be numeric'));
            $this->form_validation->set_rules('mem_about', 'Profile Bio', 'required');
            $this->form_validation->set_rules('mem_address1', 'Address', 'required');
            $this->form_validation->set_rules('mem_city', 'City or State', 'required');
            $this->form_validation->set_rules('mem_zip', 'Zip Code', 'required');
            $this->form_validation->set_rules('mem_country', 'Country', 'required|integer');
            $this->form_validation->set_rules('mem_state', 'Country', 'required|integer');
            $this->form_validation->set_rules('mem_sex', 'Gender', 'required');

            $this->form_validation->set_rules('eye_color', 'Eye Color', 'required');
            $this->form_validation->set_rules('skin_color', 'Skin Color', 'required');
            $this->form_validation->set_rules('hair_color', 'Hair Color', 'required');
            $this->form_validation->set_rules('hair_length', 'Hair Length', 'required');
            $this->form_validation->set_rules('shoe_size', 'Shoe Size', 'required');
            $this->form_validation->set_rules('height', 'Height', 'required');
            $this->form_validation->set_rules('weight', 'Weight', 'required');
            $this->form_validation->set_rules('chest_bust', 'Chest / Bust', 'required');
            $this->form_validation->set_rules('cup', 'Cup', 'required');
            $this->form_validation->set_rules('waist', 'Waist', 'required');
            $this->form_validation->set_rules('hip_inseam', 'Hip / Inseam', 'required');
            $this->form_validation->set_rules('ethnicity', 'Ethnicity', 'required');
            $this->form_validation->set_rules('jacket_size', 'Jacket Size', 'required');
            $this->form_validation->set_rules('body_type', 'Body Type', 'required');


            if ($this->form_validation->run() === FALSE)
                $res['msg'] = validation_errors();

            if (!empty($res['msg']))
                exit(json_encode($res));

            $user_info =
                [
                    'user_fname'   => trim($post['user_fname']),
                    'user_lname'   => trim($post['user_lname']),
                    'mem_phone'    => trim($post['mem_phone']),
                    'mem_phone'    => trim($post['mem_phone']),
                    'mem_dob'      => db_format_date($post['mem_dob']),
                    'mem_sex'      => $post['mem_sex'],
                    'mem_country_id' => $post['mem_country'],
                    'mem_state'     => $post['mem_state'],
                    'mem_city'     => trim($post['mem_city']),
                    'mem_zip'      => trim($post['mem_zip']),
                    'mem_address1' => trim($post['mem_address1']),
                    'mem_about'    => trim($post['mem_about']),
                    'mem_rate'     => trim($post['mem_rate']),
                    'mem_skills'   => trim($post['skills'])
                ];


            if (isset($_FILES["dp_image"]["name"]) && $_FILES["dp_image"]["name"] != "") {
                $image = upload_file(UPLOAD_PATH . 'members', 'dp_image');
                $user_info['mem_image'] = $image['file_name'];
            }

            if (isset($_FILES["cover_photo"]["name"]) && $_FILES["cover_photo"]["name"] != "") {
                $image = upload_file(UPLOAD_PATH . 'members', 'cover_photo');
                $user_info['mem_cover_image'] = $image['file_name'];
            }

            if (isset($_FILES["intro_video"]["name"]) && $_FILES["intro_video"]["name"] != "") {
                $image = upload_file(UPLOAD_PATH . 'members', 'intro_video', 'video');
                $user_info['mem_video'] = $image['file_name'];
            }

            if(!empty($post['mem_zip']))
            {
                $coordinates = get_location_detail(trim($post['mem_zip']));
                $user_info['mem_map_lat'] = $coordinates->Latitude;
                $user_info['mem_map_lng'] = $coordinates->Longitude;
            }

            $this->user_model->save($user_info, $user_id);

            # Gallery Images
            if (isset($_FILES['gallery_images']) && is_array($_FILES['gallery_images']['name'])) {
                $image_path = array();
                $count = count($_FILES['gallery_images']['name']);
                for ($key = 0; $key < $count; $key++) {
                    $_FILES['file' . $key]['name']     = $_FILES['gallery_images']['name'][$key];
                    $_FILES['file' . $key]['type']     = $_FILES['gallery_images']['type'][$key];
                    $_FILES['file' . $key]['tmp_name'] = $_FILES['gallery_images']['tmp_name'][$key];
                    $_FILES['file' . $key]['error']    = $_FILES['gallery_images']['error'][$key];
                    $_FILES['file' . $key]['size']     = $_FILES['gallery_images']['size'][$key];
                }

                for ($i = 0; $i < $count; $i++) {
                    if (isset($_FILES["file" . $i]["name"]) && $_FILES["file" . $i]["name"] != "") {
                        $image = upload_file(UPLOAD_PATH . 'members', 'file' . $i);
                        $gallery_record =
                            [
                                'mem_id' => $user_id,
                                'image'  => $image['file_name'],
                                'status' => 1
                            ];
                        $this->master->save('mem_gallery_images', $gallery_record);
                    }
                }
            }

            # DELETED IMAGES
            if(!empty(trim($post['deleted_images'])))
            {
                foreach(explode(',', trim($post['deleted_images'])) as $key => $value)
                {
                    $this->master->delete_where('mem_gallery_images', ['id'=> $value]);
                }
            }

            # Model Skills
            // $user_skills = [];
            // foreach(explode(',', $post['skills']) as $skill):
            //     $user_skills = 
            //     [
            //         'mem_id' => $user_id,
            //         'skill'  => $skill
            //     ];
            //     if(count($this->master->getRow('mem_skills', ['mem_id'=> $user_id, 'skill'=> $skill])) == '0'):
            //         $this->master->save('mem_skills', $user_skills);
            //     endif;
            // endforeach;

            # Model Languages
            $user_languages = [];
            $this->master->delete_where('mem_languages', ['mem_id' => $user_id]);
            foreach ($post['languages'] as $key => $value) :
                $user_languages =
                    [
                        'mem_id'         => $user_id,
                        'language_id'    => $value,
                        'language_level' => $post['language_level'][$key]
                    ];
                if (count($this->master->getRow('mem_languages', ['mem_id' => $user_id, 'language_id' => $value])) == '0') :
                    $this->master->save('mem_languages', $user_languages);
                endif;
            endforeach;

            $user_appearence =
                [
                    'eye_color'  => trim($post['eye_color']),
                    'skin_color' => trim($post['skin_color']),
                    'hair_color' => trim($post['hair_color']),
                    'weight'     => trim($post['weight']),
                    'chest_bust' => trim($post['chest_bust']),
                    'cup'        => trim($post['cup']),
                    'hair_length' => trim($post['hair_length']),
                    'shoe_size'  => trim($post['shoe_size']),
                    'height'     => trim($post['height']),
                    'waist'      => trim($post['waist']),
                    'hip_inseam' => trim($post['hip_inseam']),
                    'ethnicity'  => trim($post['ethnicity']),
                    'body_type'  => trim($post['body_type']),
                    'jacket_size'=> trim($post['jacket_size']),
                    'mem_id'     => $user_id
                ];

            if (count($this->appearence_model->is_exist(['mem_id' => $user_id])) > 0)
            {
                $this->appearence_model->update($user_appearence, ['mem_id' => $user_id]);
            }
            else
            {
                $this->appearence_model->save($user_appearence);
            }

            $res['msg'] = showMsg('success', 'Profile update successfully!');
            $res['status'] = 1;
            $res['hide_msg'] = 1;
            exit(json_encode($res));
        } else {
            $this->data['countries'] = countries();
            $this->data['languages'] = languages();
            $this->data['skills']         = $this->skills_model->get_rows();
            $this->data['mem_languages']  = $this->master->getRowsArray('mem_languages', ['mem_id' => $user_id]);
            $this->data['gallery_images'] = $this->master->getRows('mem_gallery_images', ['mem_id' => $user_id]);
            $this->data['appearence']     = $this->master->getRow('mem_appearance', ['mem_id' => $user_id]);
            $this->load->view("artist/profile-settings", $this->data);
        }
    }

    function inbox($receiver_id = '')
    {
        $this->isMemLogged($this->session->user_type);
        $user_id = $this->session->user_id;
        if($this->input->post())
        {
            $post = html_escape($this->input->post());
            pr($post);
            die;
            $sender_id   = $post['sender_id'];
            $receiver_id = $post['receiver_id'];
            $message = $post['message'];
            $current_chatroom = $this->chat_model->ifChatroomExist($sender_id, $receiver_id);
            if($current_chatroom)
            {
                $data = 
                [
                    'room_id'   => $current_chatroom,
                    'sender_id' => $sender_id,
                    'message'   => $message
                ];
                $this->chat_model->save($data);
            }
            else
            {
                $room_id = $this->master->save('chatrooms', ['participants'=> sort_chat_participants($sender_id, $receiver_id)]);
                $data = 
                [
                    'room_id'   => $room_id,
                    'sender_id' => $sender_id,
                    'message'   => $message
                ];
                $this->chat_model->save($data);
            }

            echo json_encode(['status'=> 'success']);
        }
        else
        {
            $this->data['chatrooms']     = $this->chat_model->getRelatedChats();
            foreach($this->data['chatrooms'] as $room):
                $participantsIndex = explode(',', $room->participants);
                foreach($participantsIndex as $receiver):
                    if($user_id != $receiver):
                        $this->data['chats'][] = 
                        [
                            'room_id' => $room->room_id,
                            'member'  => $this->user_model->getMember($receiver),
                            'isActive'=> $receiver_id == $receiver ? 'active' : ''
                        ];
                    endif;
                endforeach;
            endforeach;
            
            if(!empty($receiver_id))
            {
                $this->data['receiver_id']   = $receiver_id;
                $this->data['receiver_data'] = $this->user_model->getMember($receiver_id);
                # MEMBER CHATS
                $this->data['current_chatroom_id'] = $current_chatroom = $this->chat_model->ifChatroomExist($user_id, $receiver_id);
                $this->data['current_room'] = $this->chat_model->get_rows(['room_id'=> $current_chatroom], '', '', 'asc', 'id');
                $this->data['selected'] = 'yes';
            }
            else
            {
                $this->data['selected'] = 'no';
            }
    
            $this->load->view("artist/messages", $this->data);
        }
    }

    function createInvoice()
    {
        if($this->input->post())
        {
            $post = html_escape($this->input->post());
            $sender_id   = $post['sender_id'];
            $receiver_id = $post['receiver_id'];
            $message     = trim($post['message']);
            $amount      = trim($post['invoice_amount']);
            $working_days= trim($post['invoice_workings_days']);
            $current_chatroom = $this->chat_model->ifChatroomExist($sender_id, $receiver_id);
            if($current_chatroom)
            {
                $data = 
                [
                    'room_id'        => $current_chatroom,
                    'sender_id'      => $sender_id,
                    'message'        => $message,
                    'message_type'   => 'invoice',
                    'invoice_amount' => $amount,
                    'invoice_workings_days' => $working_days,
                    'invoice_status' => 'new'
                ];
                $this->chat_model->save($data);
            }
            else
            {
                $room_id = $this->master->save('chatrooms', ['participants'=> sort_chat_participants($sender_id, $receiver_id)]);
                $data = 
                [
                    'room_id'   => $room_id,
                    'sender_id'      => $sender_id,
                    'message'        => $message,
                    'message_type'   => 'invoice',
                    'invoice_amount' => $amount,
                    'invoice_workings_days' => $working_days,
                    'invoice_status' => 'new'
                ];
                $this->chat_model->save($data);
            }

            echo json_encode(['status'=> 'success', 'message'=> showMsg('success', 'Invoice Created Successfully')]);
        }
    }

    function invoice_response()
    {
        if($this->input->post())
        {
            $post = html_escape($this->input->post());
            $this->chat_model->save(['invoice_status'=> $post['action']], $post['chat_id'], 'id');
            echo json_encode(['status'=> 'success']);
        }
    }

    function fetch_states()
    {
        if ($this->input->post()) {
            $country_id = html_escape($this->input->post('country_id'));
            $html = '';
            $html .= '<option value="">Select</option>';
            $states = $this->master->getRows('states', ['country_id' => $country_id], '', '', 'asc', 'name');
            foreach ($states as $state) :
                $html .= '<option value="' . $state->id . '">' . $state->name . '</option>';
            endforeach;

            echo json_encode(['status' => 'success', 'html' => $html]);
        }
    }

    function new_langugae_row()
    {
        if ($this->input->post()) {
            $number = html_escape($this->input->post('number'));
            $html = '';
            $html .= '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6" id="row_no_'.$number.'">
                        <div class="flexBlk">
                            <div class="row formRow">
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 col-xx-8">
                                    <div class="txtGrp">
                                        <label for="languages" class="move">Choose Language</label>
                                        <select name="languages[' . $number . ']" id="languages" class="txtBox">
                                            <option value="">Select</option>';
            foreach (languages() as $language) :
                $html .= '<option value="' . $language->id . '">' . $language->name . '</option>';
            endforeach;
            $html .= '</select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                    <div class="txtGrp">
                                        <label for="language_level" class="move">Level</label>
                                        <select name="language_level[' . $number . ']" id="language_level" class="txtBox">
                                            <option value="">Select</option>
                                            <option value="Fluent">Fluent</option>
                                            <option value="Native">Native</option>
                                            <option value="Bilingual">Bilingual</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="rmvBtn" data-row-no="'.$number.'" onclick="delete_language_row(this)"></button>
                        </div>
                    </div>';
            echo json_encode(['status' => 'success', 'html' => $html]);
        }
    }

    function toggle_chatroom()
    {
        if($this->input->post())
        {
            $room_id = html_escape($this->input->post('room_id'));
            $room_detail = $this->master->getRow('chatrooms', ['room_id'=> $room_id]);
            $room_chats  = $this->chat_model->get_rows(['room_id'=> $room_id], '', '', 'asc', 'id');
            
            $room_participants = explode(',', $room_detail->participants);
            if($room_participants[0] == $this->session->user_id)
            {
                $sender_id = $room_participants[0];
                $receiver_id = $room_participants[1];
            }
            else
            {
                $sender_id = $room_participants[1];
                $receiver_id = $room_participants[0];
            }

            $receiver_data = $this->user_model->getMember($receiver_id);
            $chat_person = '';
            $chat_person .= '<div class="backBtn"><a href="javascript:void(0)" class="fi-arrow-left"></a></div>';
            $chat_person .= '<div class="ico"><img src="'.get_site_image_src("members", $receiver_data->mem_image, '').'" alt=""></div>';
            $chat_person .= '<h6>'.$receiver_data->user_fname.' '.$receiver_data->user_lname.'</h6>';

            $chats = '';
            foreach($room_chats as $chat):
                $who = $chat->sender_id == $this->session->user_id ? 'me' : 'you';
                $chats .= '<div class="buble '.$who.'" >';
                $chats .= '<div class="ico"><img src="'.get_site_image_src("members", get_image_of_member($chat->sender_id), '').'" alt=""></div>';
                $chats .= '<div class="txt">';
                $chats .= '<div class="time">11:59 am</div>';
                $chats .= '<div class="cntnt">'.$chat->message.'</div>';
                $chats .= '</div>';
                $chats .= '</div>';
            endforeach;

            echo json_encode(['status'=> 'success', 'sender'=> $sender_id, 'receiver'=> $receiver_id, 'chat_person'=> $chat_person, 'chat'=> $chats]);
        }
    }

    function change_pswd()
    {
        $this->isMemLogged($this->session->mem_type);
        if ($this->input->post()) {
            $res = array();
            $res['hide_msg'] = 0;
            $res['scroll_to_msg'] = 1;
            $res['redirect_url'] = 0;
            $res['status'] = 0;
            $res['frm_reset'] = 0;

            $this->form_validation->set_rules('pswd', 'Current Password', 'required');
            $this->form_validation->set_rules('npswd', 'New Password', 'required');
            $this->form_validation->set_rules('cpswd', 'Confirm Password', 'required|matches[npswd]');
            if ($this->form_validation->run() === FALSE) {
                $res['msg'] = validation_errors();
            } else {
                $post = html_escape($this->input->post());
                $row = $this->member_model->oldPswdCheck($this->data['mem_data']->mem_id, $post['pswd']);
                if (count($row) > 0) {
                    $ary = array('mem_pswd' => doEncode($post['npswd']));
                    $this->member_model->save($ary, $this->data['mem_data']->mem_id);
                    $res['msg'] = showMsg('success', 'Password successfully updated!');

                    $res['status'] = 1;
                    $res['frm_reset'] = 1;
                    $res['hide_msg'] = 1;
                } else {
                    $res['msg'] = showMsg('error', 'Old Password Does Not Match!');
                }
            }
            exit(json_encode($res));
        }
    }

    function email_verification()
    {
        $verification_check = $this->data['mem_data']->mem_verified == 0 ? false : true;
        $this->isMemLogged($this->session->mem_type, $verification_check, false);
        if ($this->data['mem_data']->mem_verified == 1) {
            // $url=$this->session->mem_type=='buyer'?'account-settings':'dashboard';
            redirect('dashboard');
            exit;
        }

        if ($this->input->post()) {
            $res = array();
            $res['frm_reset'] = 0;
            $res['hide_msg'] = 0;
            $res['scroll_to_msg'] = 0;
            $res['status'] = 0;
            $res['redirect_url'] = 0;
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            if ($this->form_validation->run() === FALSE) {
                $res['msg'] = validation_errors();
            } else {
                $post = html_escape($this->input->post());

                if (!$this->member_model->emailExists($post['email'], $this->session->mem_id)) {
                    // $rando=doEncode(rand(111111, 999999));
                    $rando = doEncode($this->session->mem_id . '-' . $post['email']);
                    $rando = strlen($rando) > 225 ? substr($rando, 0, 225) : $rando;

                    $this->member_model->save(array('mem_code' => $rando, 'mem_email' => $post['email'], 'mem_verified' => 0), $this->session->mem_id);
                    $verify_link = site_url('verification/' . $rando);

                    $mem_data = array('name' => $this->data['mem_data']->mem_fname . ' ' . $this->data['mem_data']->mem_lname, "email" => $post['email'], "link" => $verify_link);
                    $this->send_site_email($mem_data, 'change_email');

                    $res['redirect_url'] = ' ';

                    $res['msg'] = showMsg('success', 'Email has been changed successful! Please wait.');
                    setMsg('info', getSiteText('alert', 'verify_email'));

                    $res['status'] = 1;
                    $res['frm_reset'] = 1;
                    $res['hide_msg'] = 1;
                } else {
                    $res['msg'] = showMsg('error', 'Email already exists!');
                }
            }
            exit(json_encode($res));
        } else {

            $this->data['site_content'] = $this->master->getRow('sitecontent', array('ckey' => 'email_verify'));
            $this->data['site_content'] = unserialize($this->data['site_content']->code);
            $this->load->view("account/verify-email", $this->data);
        }
    }

    function resend_email()
    {
        $verification_check = $this->data['mem_data']->mem_verified == 0 ? false : true;
        $this->isMemLogged($this->session->user_type, $verification_check, false);

        $res = array();
        $res['hide_msg'] = 0;
        $res['scroll_to_msg'] = 0;
        $res['status'] = 0;
        $res['frm_reset'] = 0;
        $res['redirect_url'] = 0;

        $rando = doEncode($this->session->user_id . '-' . $this->data['mem_data']->user_email);
        $rando = strlen($rando) > 225 ? substr($rando, 0, 225) : $rando;

        $this->user_model->save(array('mem_code' => $rando), $this->session->user_id);

        $verify_link = site_url('verification/' . $rando);

        $mem_data = array('name' => $this->data['mem_data']->user_fname . ' ' . $this->data['mem_data']->user_lname, "email" => $this->data['mem_data']->user_email, "link" => $verify_link);

        $ok = $this->send_site_email($mem_data, 'verify_email');

        $res['msg'] = $ok ? showMsg('success', 'Email sent successfully!') : showMsg('error', 'There is an error occurred, Please try again later!');
        $res['status'] = 1;
        $res['hide_msg'] = 1;
        exit(json_encode($res));
    }
}
