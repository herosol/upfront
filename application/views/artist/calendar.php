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
                    events: [{
                            title: 'All Day Event',
                            start: '2021-07-12'
                        },
                        {
                            title: 'Long Event',
                            start: '2021-07-06',
                            end: '2021-07-08'
                        },
                        {
                            id: 999,
                            title: 'Repeating Event',
                            start: '2021-07-16T16:00:00'
                        },
                        {
                            id: 999,
                            title: 'Repeating Event',
                            start: '2021-07-22T16:00:00'
                        },
                        {
                            title: 'Conference',
                            start: '2021-07-04',
                            end: '2021-07-04'
                        },
                        {
                            title: 'Meeting',
                            start: '2021-07-29T10:30:00',
                            end: '2021-07-28T12:30:00'
                        },
                        {
                            title: 'Lunch',
                            start: '2021-07-31T12:00:00'
                        },
                        {
                            title: 'Meeting',
                            start: '2021-07-04T14:30:00'
                        },
                        {
                            title: 'Happy Hour',
                            start: '2021-07-04T17:30:00'
                        },
                        {
                            title: 'Dinner',
                            start: '2021-07-04T20:00:00'
                        },
                        {
                            title: 'Gym',
                            start: '2021-07-04T20:00:00'
                        },
                        {
                            title: 'Test',
                            start: '2021-07-04T20:00:00'
                        },
                        {
                            title: 'Birthday Party',
                            start: '2021-07-19T07:00:00'
                        },
                        {
                            title: 'Click for Google',
                            url: 'http://google.com/',
                            start: '2021-07-04'
                        }
                    ]
                });
            });
        </script>
    </main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>