<!doctype html>
<html>

<head>
    <title>Calendar — Upfront Worldwide Talent Agency</title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page">
    <?php $this->load->view('includes/header-artist'); ?>
    <main formal dash>
        <?php $this->load->view('includes/sidebar-artist'); ?>


        <section id="schedule">
            <div class="contain-fluid">
                <div id="calendar"></div>
            </div>
        </section>
        <!-- schedule -->


        <!-- Calendar -->
        <link type="text/css" rel="stylesheet" href="<?= base_url() ?>assets/css/fullcalendar.min.css">
        <script type="text/javascript" src="<?= base_url() ?>assets/js/moment.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/js/fullcalendar.min.js"></script>
        <script type="text/javascript">
            $(function() {
                $.ajax({
                    url: base_url+'account/my_calender',
                    data : {'action': 'calender_data'},
                    dataType: 'JSON',
                    method: 'POST',
                    success: function (rs)
                    {
                        $('#calendar').fullCalendar({
                        header: {
                            left: 'prev, next today',
                            center: 'title',
                            right: 'month, basicWeek, basicDay'
                        },
                            // defaultDate: '2021-10-04',
                            navLinks: true, // can click day/week names to navigate views
                            editable: true,
                            eventLimit: true, // allow "more" link when too many events
                            events: rs.data
                        });
                    },
                    complete: function()
                    {

                    }
                });
            });
        </script>
    </main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>