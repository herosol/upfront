<!doctype html>
<html>

<head>
    <title>Help & Support — Upfront Worldwide Talent Agency</title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page">
    <?php $this->load->view('includes/header'); ?>
    <main common typical help>


        <section id="sBanner" style="background-image: url('<?= base_url() ?>assets/images/portfolio-08.jpg');">
            <div class="contain-fluid">
                <div class="content text-center">
                    <h1>What do you need help with?</h1>
                    <div class="txtGrp flexGrp">
                        <img src="<?= base_url() ?>assets/images/icon-search.svg" alt="">
                        <input type="text" id="search_value" class="txtBox dropBtn" placeholder="Try, How to Become a Model">
                        <button type="button" id="search" class="webBtn">Search</button>
                        <ul class="dropCnt dropLst" id="search_suggestions">
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- sBanner -->


        <section id="help">
            <div class="contain">
                <h4>Discover More Topics</h4>
                <div class="flexRow flex" id="topics">
                <?php 
                foreach($records as $topic):
                    if(!empty($topic['topics'])):
                ?>
                        <div class="col">
                            <div class="inner">
                                <h5><?= $topic['cat_name']?></h5>
                                <ul>
                                    <?php foreach($topic['topics'] as $row): ?>
                                        <li><a href="<?= base_url() ?>topic-detail/<?= $row->id ?>"><?= $row->title ?></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                <?php
                    endif; 
                endforeach;
                ?>
                </div>
            </div>
        </section>
        <!-- help -->


        <script type="text/javascript">
            $(function() {
                $(document).on("keyup", "[help] #sBanner .dropBtn", function() 
                {
                    $(this).parent().find(".dropCnt").addClass("active");
                    let val = $.trim($(this).val());
                    $.ajax({
                        url: base_url+'pages/get_topic_search_suggestions',
                        data : {'val': val},
                        dataType: 'JSON',
                        method: 'POST',
                        success: function (rs)
                        {
                            $("#search_suggestions").html(rs.html);
                        },
                        complete: function()
                        {

                        }
                    })
                });

                $(document).on("click", "[help] #search_suggestions li", function() 
                {
                    let current = $(this);
                    $('#search_value').val('');
                    $('#search_value').val(current.data('value'));
                });


                $(document).on("click", "[help] #search", function() 
                {
                    let keyword = $('#search_value').val();
                    $.ajax({
                        url: base_url+'pages/get_topic_search',
                        data : {'keyword': keyword},
                        dataType: 'JSON',
                        method: 'POST',
                        success: function (rs)
                        {
                            $("#topics").html(rs.html);
                        },
                        complete: function()
                        {

                        }
                    })
                });
            });
        </script>
    </main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>