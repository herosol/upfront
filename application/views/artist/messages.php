<!doctype html>
<html>

<head>
    <title>Messages — Upfront Worldwide Talent Agency</title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page">
    <?php $this->load->view('includes/header-artist'); ?>
    <main common inbox>


        <div class="contain-fluid">
            <div class="barBlk relative">
                <div class="srch relative">
                    <input type="text" class="txtBox" placeholder="Search contact" onkeyup="filter(this)">
                    <button type="button"><img src="<?= base_url() ?>assets/images/icon-search.svg" alt=""></button>
                </div>
                <ul class="frnds scrollbar" id="chat_list">
                    <?php
                    if(count($chats) > 0):
                        foreach($chats as $key => $chat):
                    ?>
                        <li data-chat="person1" class="<?= $chat['isActive']?>" onclick="selectMe(<?= $chat['room_id'] ?>)">
                            <div class="inner sms">
                                <div class="ico"><img src="<?= get_site_image_src("members", $chat['member']->mem_image, ''); ?>" alt=""></div>
                                <div class="txt">
                                    <h5><?= $chat['member']->user_fname.' '.$chat['member']->user_lname; ?></h5>
                                    <p>Welcome to Upfront Worldwide Talent Agency</p>
                                </div>
                            </div>
                        </li>
                    <?php
                        endforeach;
                    endif;
                    ?>
                </ul>
            </div>
            <div class="chatBlk relative">
                <div class="chatPerson">
                    <div class="backBtn"><a href="javascript:void(0)" class="fi-arrow-left"></a></div>
                    <div class="ico"><img src="<?= get_site_image_src("members", $receiver_data->mem_image, ''); ?>" alt=""></div>
                    <h6><?= $receiver_data->user_fname.' '.$receiver_data->user_lname; ?></h6>
                </div>
                <div class="chat scrollbar active" data-chat="person1">
                <?php foreach($current_room as $chat): ?>
                    <div class="buble <?= $chat->sender_id == $this->session->user_id ? 'me' : 'you'; ?>" >
                        <div class="ico"><img src="<?= get_site_image_src("members", get_image_of_member($chat->sender_id), ''); ?>" alt=""></div>
                        <div class="txt">
                            <div class="time">11:59 am</div>
                            <div class="cntnt"><?= $chat->message ?></div>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
                <div class="write">
                    <form class="relative">
                        <textarea class="txtBox" placeholder="Type a message" id="msgText" onkeypress="textAreaAdjust(this)"></textarea>
                        <div class="btm">
                            <button type="button" class="webBtn smBtn labelBtn arrowBtn upBtn" title="Upload Files"><img src="<?= base_url() ?>assets/images/icon-clip.svg" alt=""></button>
                            <button type="button" class="webBtn smBtn labelBtn icoBtn" data-sender="<?= $this->session->user_id ?>" data-receiver="<?= $receiver_id ?>" onclick="sendMessage(this)">Send <img src="<?= base_url() ?>assets/images/icon-send.svg" alt=""></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <!-- Main Js -->
        <script type="text/javascript" src="<?= base_url() ?>assets/js/main.js"></script>
        <script>
            const sendMessage = obj => 
            {
                let btn = $(obj);
                let message = $.trim($('#msgText').val());
                if(message.length === 0)
                    return false;
                let sender_id   = btn.data('sender');
                let receiver_id = btn.data('receiver');

                $.ajax({
                        url: base_url+'inbox',
                        data : {'sender_id': sender_id, 'receiver_id': receiver_id, 'message': message},
                        dataType: 'JSON',
                        method: 'POST',
                        success: function (rs)
                        {
                            $('#msgText').val('');
                            $('#msgText').focus();
                            location.reload();
                        },
                        complete: function()
                        {

                        }
                    })
            }

            function filter(element) 
            {
                var value = $.trim($(element).val());

                $("#chat_list > li").each(function() {
                    if ($(this).text().toLowerCase().search(value.toLowerCase()) > -1)
                    {
                        $(this).show();
                    }
                    else {
                        $(this).hide();
                    }
                });
            }

            
        </script>
    </main>
</body>

</html>