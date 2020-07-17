<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1">

    <title>Homepage</title>
    <link rel="icon" href="favicon.png" type="image/png">
    <link rel="shortcut icon" href="favicon.ico" type="img/x-icon">

    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>

    <link href="<?= base_url('assets/') ?>css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/') ?>css/style.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/') ?>css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/') ?>css/responsive.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/') ?>css/magnific-popup.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/') ?>css/animate.css" rel="stylesheet" type="text/css">

    <script type="text/javascript" src="<?= base_url('assets/') ?>js/jquery.1.8.3.min.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/') ?>js/bootstrap.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/') ?>js/jquery-scrolltofixed.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/') ?>js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/') ?>js/jquery.isotope.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/') ?>js/wow.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/') ?>js/classie.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/') ?>js/magnific-popup.js"></script>
    <script src="<?= base_url('assets/') ?>contactform/contactform.js"></script>

    <!-- =======================================================
    Theme Name: Knight
    Theme URL: https://bootstrapmade.com/knight-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
	======================================================= -->

</head>

<body>
    <header class="header" id="header" style="  padding-top: 200px; padding-bottom: 200px;">
        <!--header-start-->
        <div class="container">
            <figure class="logo animated fadeInDown delay-07s">
                <a href="#"><img src="<?= base_url('assets/img/logo.png')?>" alt=""></a>
            </figure>
            <h1 class="animated fadeInDown delay-07s">Selamat Datang di Rapot Online</h1>
			            <h1 class="animated fadeInDown delay-07s">SMA NASIONAL SATU</h1>
            <ul class="we-create animated fadeInUp delay-1s">
                <li bgcolor="blue"> Memudahkan pendidik melihat laporan hasil peserta didik.</li>
            </ul>
            <a class="link animated fadeInUp delay-1s servicelink" href="#service">Pelayanan Kami</a><br></br>
            <a class="link animated fadeInUp delay-1s" href="<?= site_url('auth/login_guru') ?>">Login Guru</a>
			<a class="link animated fadeInUp delay-1s" href="<?= site_url('auth/login_siswa') ?>">Login Siswa</a>
			<a class="link animated fadeInUp delay-1s" href="<?= site_url('auth') ?>">Admin</a>
        </div>
    </header>
    <!--header-end-->

    <nav class="main-nav-outer" id="test">
        <!--main-nav-start-->
        <div class="container">
            <ul class="main-nav">
                <li><a href="#header">Beranda</a></li>
                <li><a href="#service">Layanan</a></li>
                <li><a href="#contact">Kontak</a></li>
            </ul>
            <a class="res-nav_click" href="#"><i class="fa fa-bars"></i></a>
        </div>
    </nav>
    <!--main-nav-end-->



    <section class="main-section" id="service">
        <!--main-section-start-->
        <div class="container">
            <h2>Services</h2>
            <h6>We offer exceptional service with complimentary hugs.</h6>
            <div class="row">
                <div class="col-lg-4 col-sm-6 wow fadeInLeft delay-05s">
                    <div class="service-list">
                        <div class="service-list-col1">
                        <i class="fa fa-pencil"></i>
                        </div>
                        <div class="service-list-col2">
                            <h3>Penginputan Rapot</h3>
                            <p>Memudahkan penginputan rapot peserta didik.</p>
                        </div>
                    </div>
                    <div class="service-list">
                        <div class="service-list-col1">
                        <i class="fas fa-check"></i>
                        </div>
                        <div class="service-list-col2">
                            <h3>Pengecekan Rapot</h3>
                            <p>Cross Check hasil pembelajaran peserta didik.</p>
                        </div>
                    </div>
                    <div class="service-list">
                        <div class="service-list-col1">
                        <i class="fas fa-print"></i>
                        </div>
                        <div class="service-list-col2">
                            <h3>Pencetakan Rapot</h3>
                            <p>Mencetak rapot peserta didik.</p>
                        </div>
                    </div>
                </div>
                <figure class="col-lg-8 col-sm-6  text-right wow fadeInUp delay-02s">
                    <img src="<?= base_url('assets/img/service_pic.png')?>">
                </figure>

            </div>
        </div>
    </section>
    <!--main-section-end-->

    <section class="business-talking" id="contact">
        <!--business-talking-start-->
        <div class="container">
            <h2>Let’s Talk Business.</h2>
        </div>
    </section>
    <!--business-talking-end-->
    <div class="container">
        <section class="main-section contact">
            <div class="row">
                <div class="col-lg-6 col-sm-7 wow fadeInLeft">
                    <div class="contact-info-box address clearfix">
                        <h3><i class="fas fa-map-signs"></i>Alamat:</h3>
                        <span>Jatiwaringin<br>Pondok Gede, Jakarta, 14045.</span>
                    </div>
                    <div class="contact-info-box phone clearfix">
                        <h3><i class="fa fa-phone"></i>Telp.:</h3>
                        <span>0000000909090</span>
                    </div>
                    <div class="contact-info-box email clearfix">
                        <h3><i class="fa fa-pencil"></i>email:</h3>
                        <span>hello@rapot_online.com</span>
                    </div>
                        <ul class="social-link">
                        <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li class="gplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li class="dribbble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
    <footer class="footer">
        <div class="container">
            <div class="footer-logo"><a href="#"><img src="img/footer-logo.png" alt=""></a></div>
            <span class="copyright">&copy; RAPOT ONLINE. All Rights Reserved</span>
            <div class="credits">
                <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Knight
        -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer>


    <script type="text/javascript">
        $(document).ready(function(e) {

            $('#test').scrollToFixed();
            $('.res-nav_click').click(function() {
                $('.main-nav').slideToggle();
                return false

            });

            $('.Portfolio-box').magnificPopup({
                delegate: 'a',
                type: 'image'
            });

        });
    </script>

    <script>
        wow = new WOW({
            animateClass: 'animated',
            offset: 100
        });
        wow.init();
    </script>


    <script type="text/javascript">
        $(window).load(function() {

            $('.main-nav li a, .servicelink').bind('click', function(event) {
                var $anchor = $(this);

                $('html, body').stop().animate({
                    scrollTop: $($anchor.attr('href')).offset().top - 102
                }, 1500, 'easeInOutExpo');
                /*
                if you don't want to use the easing effects:
                $('html, body').stop().animate({
                	scrollTop: $($anchor.attr('href')).offset().top
                }, 1000);
                */
                if ($(window).width() < 768) {
                    $('.main-nav').hide();
                }
                event.preventDefault();
            });
        })
    </script>

    <script type="text/javascript">
        $(window).load(function() {


            var $container = $('.portfolioContainer'),
                $body = $('body'),
                colW = 375,
                columns = null;


            $container.isotope({
                // disable window resizing
                resizable: true,
                masonry: {
                    columnWidth: colW
                }
            });

            $(window).smartresize(function() {
                // check if columns has changed
                var currentColumns = Math.floor(($body.width() - 30) / colW);
                if (currentColumns !== columns) {
                    // set new column count
                    columns = currentColumns;
                    // apply width to container manually, then trigger relayout
                    $container.width(columns * colW)
                        .isotope('reLayout');
                }

            }).smartresize(); // trigger resize to set container width
            $('.portfolioFilter a').click(function() {
                $('.portfolioFilter .current').removeClass('current');
                $(this).addClass('current');

                var selector = $(this).attr('data-filter');
                $container.isotope({

                    filter: selector,
                });
                return false;
            });

        });
    </script>

</body>

</html>