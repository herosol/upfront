<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="title" content="Upfront Worldwide Talent Agency">
<meta name="description" content="A division of SpeakUp Bev">
<meta property="og:type" content="website">
<meta property="og:url" content="<?= base_url() ?>assets/index.php">
<meta property="og:title" content="Upfront Worldwide Talent Agency">
<meta property="og:description" content="A division of SpeakUp Bev">
<meta property="og:image" content="<?= base_url() ?>assets/images/thumbnail.jpg">
<meta property="twitter:card" content="thumbnail">
<meta property="twitter:url" content="<?= base_url() ?>assets/index.php">
<meta property="twitter:title" content="Upfront Worldwide Talent Agency">
<meta property="twitter:description" content="A division of SpeakUp Bev">
<meta property="twitter:image" content="<?= base_url() ?>assets/images/thumbnail.jpg">


<!-- Css files -->
<!-- Bootstrap Css -->
<link type="text/css" rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">
<!-- Main Css -->
<link type="text/css" rel="stylesheet" href="<?= base_url() ?>assets/css/main.css">
<!-- Media-Query Css -->
<link type="text/css" rel="stylesheet" href="<?= base_url() ?>assets/css/responsive.css">
<!-- Font-Icon Css -->
<link type="text/css" rel="stylesheet" href="<?= base_url() ?>assets/css/font-icon.min.css">
<!-- Owl Carousel Css -->
<link type="text/css" rel="stylesheet" href="<?= base_url() ?>assets/css/owl.carousel.min.css">
<!-- Owl Theme Css -->
<link type="text/css" rel="stylesheet" href="<?= base_url() ?>assets/css/owl.theme.default.min.css">
<!-- Datepicker Css -->
<link type="text/css" rel="stylesheet" href="<?= base_url() ?>assets/css/datepicker.min.css">
<!-- Light Gallery Css -->
<link type="text/css" rel="stylesheet" href="<?= base_url() ?>assets/css/lightgallery.css">


<!-- JS Files -->
<script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets/js/jquery.validate.min.js') ?>"></script>
<script type="text/javascript">
    var base_url = "<?= base_url() ?>";
</script>
<!-- Owl Carousel Js -->
<script type="text/javascript" src="<?= base_url() ?>assets/js/owl.carousel.min.js"></script>
<script type="text/javascript">
    $(window).on('load', function() {
        $('#owl-product').owlCarousel({
            loop: true,
            margin: 0,
            smartSpeed: 1000,
            autoplayTimeout: 8000,
            autoplayHoverPause: true,
            items: 1
        });
        $('.owl-guardian').owlCarousel({
            // dots: false,
            // nav: true,
            // navText: ['<i class="fi-chevron-left"></i>', '<i class="fi-chevron-right"></i>'],
            loop: true,
            margin: 30,
            smartSpeed: 1000,
            autoplayTimeout: 8000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 2
                },
                991: {
                    items: 3
                },
                1200: {
                    items: 4
                }
            }
        });
        $('#owl-topics').owlCarousel({
            loop: true,
            margin: 30,
            smartSpeed: 1000,
            autoplayTimeout: 8000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 2
                },
                768: {
                    items: 3
                },
                991: {
                    items: 4
                },
                1200: {
                    items: 5
                }
            }
        });
    });
</script>
<!-- Datepicker Js -->
<script type="text/javascript" src="<?= base_url() ?>assets/js/datepicker.min.js"></script>
<script type="text/javascript">
    $(window).on('load', function() {
        $('.datepicker').datepicker({
            // multidate: true,
            format: 'mm-dd-yyyy',
            todayHighlight: true,
            multidateSeparator: ',  ',
            templates: {
                leftArrow: '<i class="fi-arrow-left"></i>',
                rightArrow: '<i class="fi-arrow-right"></i>'
            }
        });
    });
</script>
<!-- Rateyo Js -->
<script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.rateyo.min.js"></script>
<script type="text/javascript">
    $(function() {
        $('.rateYo').rateYo({
            rating: 4.0,
            fullStar: true,
            readOnly: true,
            normalFill: '#ddd',
            ratedFill: '#edd567',
            starWidth: '14px',
            spacing: '2px'
        });
    });
</script>
<!-- Light Gallery Js -->
<script type="text/javascript" src="<?= base_url() ?>assets/js/lightgallery-all.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.mousewheel.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#gallery').lightGallery({
            thumbnail: true,
        });
    });
</script>
<!-- Ckeditor Js -->
<script type="text/javascript" src="<?= base_url() ?>assets/js/ckeditor5.js"></script>


<!-- Favicon -->
<link type="image/png" rel="icon" href="<?= base_url() ?>assets/images/favicon.png">