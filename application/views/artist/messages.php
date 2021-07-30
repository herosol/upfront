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
                        <li data-chat="person1" class="<?= $chat['isActive']?>" onclick="selectMe(this, <?= $chat['room_id'] ?>)">
                            <div class="inner sms">
                                <div class="ico"><img src="<?= get_site_image_src("members", $chat['member']->mem_image, ''); ?>" alt=""></div>
                                <div class="txt">
                                    <h5><?= $chat['member']->user_fname.' '.$chat['member']->user_lname; ?></h5>
                                    <p><?=get_last_chat_message($chat['room_id'])?></p>
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
                <?php if($selected == 'yes'): ?>
                    <div class="backBtn"><a href="javascript:void(0)" class="fi-arrow-left"></a></div>
                    <div class="ico"><img src="<?= get_site_image_src("members", $receiver_data->mem_image, ''); ?>" alt=""></div>
                    <h6><?= $receiver_data->user_fname.' '.$receiver_data->user_lname; ?></h6>
                <?php else: ?>
                    <h6>Select a chat</h6>
                <?php endif; ?>
                </div>
                <div class="chat scrollbar active" data-chat="person1" id="room_chat">
                <?php 
                foreach($current_room as $chat):
                    if($chat->message_type == 'text'):
                ?>
                    <div class="buble <?= $chat->sender_id == $this->session->user_id ? 'me' : 'you'; ?>" >
                        <div class="ico"><img src="<?= get_site_image_src("members", get_image_of_member($chat->sender_id), ''); ?>" alt=""></div>
                        <div class="txt">
                            <div class="time"><?= chat_message_time($chat->message_time) ?></div>
                            <div class="cntnt"><?= $chat->message ?></div>
                        </div>
                    </div>
                <?php elseif($chat->message_type == 'invoice'): ?>
                    <div class="buble <?= $chat->sender_id == $this->session->user_id ? 'me' : 'you'; ?>" >
                        <div class="ico"><img src="<?= get_site_image_src("members", get_image_of_member($chat->sender_id), ''); ?>" alt=""></div>
                        <div class="txt">
                            <div class="time"><?= chat_message_time($chat->message_time) ?></div>
                            <div class="cntnt ivoice-outer">
                                <div class="invoice-header">
                                    <h4>Order Invoice</h4>
                                </div>
                                <div class="ivoice-lbl">
                                    <p><?=$chat->message?></p>
                                    <div class="flex">
                                        <div><small>Amount:</small> <span>$ <?= $chat->invoice_amount ?><span></div>
                                        <div><small>Days:</small> <span><?= $chat->invoice_workings_days ?> Working days<span></div>
                                    </div>
                                </div>
                                <div class="bTn">
                                <?php  if($chat->invoice_status == 'new'): ?>
                                    <?php if($chat->sender_id != $this->session->user_id): ?>
                                        <a href="javascript:void()" class="accept-btn webBtn smBtn" onclick="invoiceResponse(this, 'accepted', '<?= $chat->id ?>')"><i class="fi-check"></i><span>Accept</span></a>
                                        <a href="javascript:void()" class="decline-btn webBtn smBtn" onclick="invoiceResponse(this, 'declined', '<?= $chat->id ?>')"><i class="fi-cross"></i><span>Decline</span></a>
                                    <?php else: ?>
                                        <div class="waiting-btn webBtn smBtn"><i class="fi-spinner"></i><span>Waiting For Response</span></div>
                                    <?php endif; ?>
                                <?php elseif($chat->invoice_status == 'accepted'): ?>
                                    <div class="accept-btn webBtn smBtn"><i class="fi-check"></i><span>Accepted</span></div>
                                <?php else: ?>
                                    <div class="decline-btn webBtn smBtn"><i class="fi-cross"></i><span>Declined</span></div>
                                <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php 
                else:
                $attachments = $this->master->getRows('chat_attachments', ['chat_id'=> $chat->id]);
                 ?>
                    <div class="buble <?= $chat->sender_id == $this->session->user_id ? 'me' : 'you'; ?>">
                        <div class="ico"><img src="<?= get_site_image_src("members", get_image_of_member($chat->sender_id), ''); ?>" alt=""></div>
                        <div class="txt">
                            <div class="time"><?= chat_message_time($chat->message_time) ?></div>
                            <div class="cntnt">
                            <?= $chat->message ?>
                            </div>
                            <?php foreach($attachments as $attachment): ?>
                            <div class="file-attach">
                                <div class="file-attach-bx flex">
                                    <i class="fi-file"></i> <span><?= $attachment->original_name ?></span>
                                </div>
                                <a href="<?= base_url().'download-file/'.doEncode($attachment->id); ?>" target="_blank" class="download-lnk"><i class="fi-download"></i></a>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php 
                endif;
                endforeach;
                ?>
                </div>
                <div class="write">
                    <div class="file-upload-box">
                        <!-- <div class="image-blk">
                            <img src="<?= base_url().'assets/images/file-dummy.png' ?>" alt="">
                            <span><i class="fi-cross"></i></span>
                        </div>
                        <div class="image-blk">
                           <img src="<?= get_site_image_src("members", get_image_of_member($chat->sender_id), ''); ?>" alt="">
                           <span><i class="fi-cross"></i></span>
                        </div> -->
                    </div>
                    <form class="relative" id="sendMessageForm" action="" method="post">
                        <textarea class="txtBox" name="message" placeholder="Type a message" id="msgText" onkeypress="textAreaAdjust(this)"></textarea>
                        <div class="btm">
                            <button type="button" class="webBtn smBtn labelBtn arrowBtn upBtn" title="Upload Files"><img src="<?= base_url() ?>assets/images/icon-clip.svg" alt=""></button>
                            <input type="file" name="attachments[]" id="attachments" multiple>
                            <?php if($this->session->user_type == 'model'): ?>
                                <a href="javascript:void(0)" class="popBtn webBtn smBtn" data-popup="invoice">Make Invoice</a>
                            <?php endif; ?>
                            <input type="hidden" name="sender_id" id="sender_id" value="<?= $this->session->user_id ?>">
                            <input type="hidden" name="receiver_id" id="receiver_id" value="<?= $receiver_id ?>">
                            <button type="submit" class="webBtn smBtn labelBtn icoBtn">Send <img src="<?= base_url() ?>assets/images/icon-send.svg" alt=""></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="popup detail-pupup" data-popup="invoice">
            <div class="tableDv">
                <div class="tableCell">
                    <div class="contain">
                        <div class="_inner">
                           <div class="crosBtn"></div>
                           <h2>Please Make An Invoice</h2>
                           <form action="<?=base_url()?>account/createInvoice" method="POST" id="createInvoiceForm">
                                <input type="hidden" id="invoice_sender_id" name="sender_id" value="<?= $this->session->user_id ?>" ?>
                                <input type="hidden" id="invoice_receiver_id" name="receiver_id" value="<?= $receiver_id ?>" ?>
							   <div class="alertMsg"></div>
                               <div class="row">
                                   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12 text-center txtGrp">
                                        <label for="message">Invoice Description</label>
                                        <textarea name="message" class="txtBox"></textarea>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6 text-center txtGrp">
                                        <label for="invoice_amount">Amount</label>
                                        <input type="text" name="invoice_amount" id="invoice_amount" class="txtBox">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6 text-center txtGrp">
                                        <label for="invoice_workings_days">Number of days</label>
                                        <input type="text" name="invoice_workings_days" id="invoice_workings_days" class="txtBox">
                                    </div>
                                    
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12 text-center">
                                        <button type="submit" class="webBtn" id="createInvoice"><i class="fa fa-spinner fa-spin hidden"></i> Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Js -->
        <script type="text/javascript" src="<?= base_url() ?>assets/js/main.js"></script>
        <script>
            $(function() {
                // Multiple images preview in browser
                var imagesPreview = function(input, placeToInsertImagePreview) 
                {
                    var extensions = ["jpg", "jpeg", "png"];
                    if (input.files) 
                    {
                        var filesAmount = input.files.length;
                        for (i = 0; i < filesAmount; i++) 
                        {
                            let extension = input.files[i].name.split('.')[1];
                            let html = '';
                            var reader = new FileReader();

                            reader.onload = function(event) 
                            {
                                // OTHER THAN IMAGE
                                if(extensions.indexOf(extension) < 0)
                                {
                                    html = `<div class="image-blk">
                                            <img src="<?= base_url().'assets/images/file-dummy.png' ?>" alt="">
                                            <span><i class="fi-cross"></i></span>
                                        </div>`;
                                }
                                // IMAGES
                                else
                                {
                                    html = `<div class="image-blk">
                                            <img src="${event.target.result}" alt="">
                                            <span><i class="fi-cross"></i></span>
                                        </div>`;
                                }
                                $(placeToInsertImagePreview).prepend(html);
                            }

                            reader.readAsDataURL(input.files[i]);
                        }
                    }

                };

                $('#attachments').on('change', function() {
                    imagesPreview(this, '.file-upload-box');
                });
            });

            const invoiceResponse = (obj, action, chat_id) =>
            {
                $.ajax({
                        url: base_url+'account/invoice_response',
                        data : {'action': action, 'chat_id': chat_id},
                        dataType: 'JSON',
                        method: 'POST',
                        success: function (rs)
                        {
                            if(rs.status == 'success')
                            {
                                if(action == 'accepted')
                                    $(obj).parent().html('<div class="accept-btn webBtn smBtn"><i class="fi-check"></i><span>Accepted</span></div>');
                                else
                                    $(obj).parent().html('<div class="decline-btn webBtn smBtn"><i class="fi-cross"></i><span>Declined</span></div>');
                            }
                        },
                        complete: function()
                        {

                        }
                    });
            }

            $(document).on('submit', '#sendMessageForm', function(e) 
            {
                e.preventDefault();
                var msg = $.trim($('#msgText').val());
                var reciever_id = $('#reciever_id').val();

                if(msg == '' || reciever_id == '')
                    return false;

                let form = this;
                $.ajax({
                    url: base_url+'inbox',
                    data: new FormData(form),
                    processData: false,
                    contentType: false,
                    dataType: 'JSON',
                    method: 'POST',
                    success: function (rs)
                    {
                        location.reload();
                    },
                    complete: function()
                    {

                    }
                });
            });

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

            const selectMe = (obj, room_id) => 
            {
                $.ajax({
                        url: base_url+'toggleChatroom',
                        data : {'room_id': room_id},
                        dataType: 'JSON',
                        method: 'POST',
                        success: function (rs)
                        {
                            // TOGGLE ACTIVE CLASS
                            $('#chat_list li.active').removeClass('active');
                            $(obj).addClass('active');

                            // CHAT TOGGLE
                            $('.chatPerson').html(rs.chat_person);
                            $('#room_chat').html(rs.chat);
                            $('#sender_id').val(rs.sender);
                            $('#receiver_id').val(rs.receiver);
                            $('#invoice_sender_id').val(rs.sender);
                            $('#invoice_receiver_id').val(rs.receiver);

                            // CHANGE URL
                            let url = document.URL;
                            let parts = url.split('/');
                            let lastSegment = parts.pop() || parts.pop();

                            if(lastSegment == 'inbox')
                                window.location = url.replace(lastSegment, 'inbox/'+rs.receiver);
                            else
                                window.location = url.replace(lastSegment, rs.receiver);

                        },
                        complete: function()
                        {
                            // console.log('T');
                        }
                    });
            }
            
        </script>
    </main>
    <script type="text/javascript" src="<?= base_url('assets/js/custom-validations.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/custom.js') ?>"></script>
</body>

</html>