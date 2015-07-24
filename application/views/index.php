<!doctype html>
<html class="no-js" lang="en-US">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- SITE TITLE -->
    <title>GreenSpace | Virtual Marijuana Marketplace</title>

    <!-- =========================
       Meta Information
    ============================== -->
    <meta name="description" content="KreFolio - Startup Agency Landing Page Template">
    <meta name="keywords" content="KreFolio, KreFolio html template, Free Bootstrap template, Responsive onepage template">
    <meta name="author" content="Zahidul Hossain @choyan">

    <!-- =========================
       favicon and app touch icon
    ============================== -->
    <link rel="shortcut icon" href="/assets/img/favicon.png">
    <!-- <link rel="apple-touch-icon" href="apple-touch-icon.png">  dont know WTF this is -->


    <!-- =========================
       Bootstrap and animation
    ============================== -->
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/css/animate.min.css">

    <!-- =========================
       Fonts, typography and icons
    ============================== -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'> -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/assets/css/font-awesome.css">
    <link rel="stylesheet" href="/assets/css/typography.css">

    <!-- =========================
       Carousel, lightbox and circle generator
    ============================== -->
    <link rel="stylesheet" href="/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="/assets/css/owl.theme.css">
    <link rel="stylesheet" href="/assets/css/nivo-lightbox.css">
    <link rel="stylesheet" href="/assets/css/nivo-lightbox-default.css">
    <link rel="stylesheet" href="/assets/css/jquery.circliful.css">

    <!-- ***** Main Stylesheet ***** -->
    <link rel="stylesheet" href="/assets/css/main.css">

    <!-- ***** My Custom Stylesheet ***** -->
    <link rel="stylesheet" type="text/css" href="/assets/css/custom.css">

    <!-- ***** Responsive fixes ***** -->
    <link rel="stylesheet" href="/assets/css/responsive.css">

    <!-- Header scripts -->
    <script src="/assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="/assets/js/queryloader2.min.js"></script>

    <!-- =========================
       Preloader
    ============================== -->
    <script>
        window.addEventListener('DOMContentLoaded', function() {
            "use strict";
            new QueryLoader2(document.querySelector("body"), {
                barColor: "#35dea1",
                backgroundColor: "#111",
                percentage: true,
                barHeight: 1,
                minimumTime: 200,
                fadeOutTime: 1000
            });
        });
    </script>
    
</head>
<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- =========================
       Fullscreen menu
    ============================== -->
    <div class="mobilenav">
        <ul>
            <li data-rel="#header">
                <span class="nav-label">Home</span>
            </li>
            <li data-rel="#about-us">
                <span class="nav-label">About Us</span>
            </li>
            <li data-rel="#why-choose-us">
                <span class="nav-label">Why Choose Us</span>
            </li>
            <li data-rel="#our-team">
                <span class="nav-label">Our Team</span>
            </li>
            <li data-rel="#testimonial">
                <span class="nav-label">Testimonial</span>
            </li>
            <li data-rel="#portfolio">
                <span class="nav-label">Portfolio</span>
            </li>
            <li data-rel="#map">
                <span class="nav-label">Contact Us</span>
            </li>
        </ul>
    </div>  <!-- *** end Full Screen Menu *** -->

    <!-- *****  hamburger icon ***** -->
    <a href="javascript:void(0)" class="menu-trigger">
       <div class="hamburger">
         <div class="menui top-menu"></div>
         <div class="menui mid-menu"></div>
         <div class="menui bottom-menu"></div>
       </div>
    </a>


    <!-- =========================
       Header
    ============================== -->
    <header id="header">
        <div id="myCarousel" class="carousel slide">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
            </ol>

            <!-- Wrapper for Slides -->
            <div class="carousel-inner">

                <!-- *****  Logo ***** -->
                <div class="logo-container">
                    <a href="#">
                        <img src="img/logo.png" height="100" width="300" alt="">
                    </a>
                </div>

                <!-- =========================
                   Header item 1
                ============================== -->
                <div class="item active">

                    <!-- Set the first background image using inline CSS below. -->
                    <div class="fill" style="background-image:url('/assets/img/landing.jpg');">
                    </div>
                    <div class="carousel-caption">
                        <h1 class="light mab-none">Welcome to <strong class="bold-text main-color">GreenSpace</strong>, a virtual marketplace </h1>
                        <h1 class="light margin-bottom-medium mat-none">for all your dispensary needs.</h1>
                        <!-- <p class="light margin-bottom-medium">Here to serve all your dispensary needs</p> -->
                        <div class="call-button">
                            <div class="row">
                                <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-xs-12">
                                    <a href="#portfolio" class="button pull-right internal-link bold-text light hvr-grow" data-rel="#portfolio">About Us</a>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <a href="#about-us" class="button pull-left internal-link bold-text main-bg hvr-grow" data-rel="#about-us">Explore</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class='row'>
                                <div class='form-group col-md-4 col-md-offset-4'>
                                    <form action='/search/1' class="search-bar" method='post'>
                                        <input type="search" class='form-control' placeholder="Search strains or dispensaries" name='search'>
                                        <button type="submit" class="btn btn-default btn-search"><i class="flaticon-magnifying-glass34"></i></button>  
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="overlay"></div>
                </div>
    </header> <!-- *** end Header *** -->


    <!-- =========================
       Call to action
    ============================== -->
    <section id="call-to-action" class="call-to-action main-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-1 col-sm-6 col-sm-offset-1 col-xs-12 wow slideInLeft animated">
                    <p class="light-text">Like What You See? We're Just Getting Started</p>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 button-container wow slideInRight animated">
                    <a href="#portfolio" class="button light internal-link pull-left hvr-grow" data-rel="#portfolio">View Portfolio</a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </section> <!-- *** end call-to-action *** -->


    


    <!-- =========================
       Case Study
    ============================== -->
    <section id="case-study" class="case-study">
        <div class="row mar-none mat-none">

            <!-- *****  Case Study Left ***** -->
            <div class="col-md-6 case-study-left wow slideInLeft">
                <div class="overlay padding-large text-right">
                    <div class="description">
                        <h3 class="margin-bottom-small light-text">We are revoulutionizing marketing.</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    </div>
                </div>
            </div>

            <!-- *****  Case Study Right ***** -->
            <div class="col-md-6 case-study-right wow slideInRight">
                <div class="overlay padding-large">
                    <div class="description">
                        <h3 class="margin-bottom-small light-text">We are revoulutionizing marketing.</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- *** end Case Study *** -->


    <!-- =========================
       Why Coose Us
    ============================== -->
    <section id="about-us" class="why-choose-us">
        <div class="container margin-top-large">
            <h2>
                <strong class='bold-text'>Explore</strong>
            </h2>
            <div class="line main-bg margin-bottom-large"></div>

            <div class='row text-center explore1'>
                <div class='col-md-12'>
                    <h2 class='category'>Popular Strains</h2>
                </div>
            </div>
            <div class='row text-center'>
                <div class='col-md-6 explore2'>
                    <h2 class='category'>Strains A-Z</h2>
                </div>
                <div class='col-md-6 explore2'>
                    <h2 class='category'>Newest Strains</h2>
                </div>
            </div>
            <h2 class='title'><strong class='bold-text'>Moods and Activities</strong></h2>
            <div class="line main-bg margin-bottom-large"></div>
            <div class='row text-center'>
                <div class='col-md-4 explore3'>
                    <h2 class='category'>Lift Your Spirits</h2>
                </div>
                <div class='col-md-4 explore3'>
                    <h2 class='category'>Stay Productive</h2>
                </div>
                <div class='col-md-4 explore3'>
                    <h2 class='category'>Good Night Sleep</h2>
                </div>
                 <div class='col-md-4 explore3'>
                    <h2 class='category'>Conquer Social Anxiety</h2>
                </div>
                <div class='col-md-4 explore3'>
                    <h2 class='category'>Motivate the Mind</h2>
                </div>
                <div class='col-md-4 explore3'>
                    <h2 class='category'>Get Active</h2>
                </div>
            </div>
            <h2 class='title'><strong class='bold-text'>Medical</strong></h2>
            <div class="line main-bg margin-bottom-large"></div>
            <div class='row text-center'>
                <div class='col-md-4 explore4'>
                    <h2 class='category'>Fight Fatigue</h2>
                </div>
                <div class='col-md-4 explore4'>
                    <h2 class='category'>Manage Migraines</h2>
                </div>
                <div class='col-md-4 explore4'>
                    <h2 class='category'>Curb Depression</h2>
                </div>
                 <div class='col-md-4 explore4'>
                    <h2 class='category'>Fight Your Cramps</h2>
                </div>
                <div class='col-md-4 explore4'>
                    <h2 class='category'>Treat Arthritis</h2>
                </div>
                <div class='col-md-4 explore4'>
                    <h2 class='category'>Remedy Stomach Pain</h2>
                </div>
                <div class='col-md-4 explore4'>
                    <h2 class='category'>Crush Anxiety</h2>
                </div>
            </div>
        </div>
        <div class="container margin-top-large">
            <div class="row text-center">

                <!-- *****  Service Single ***** -->
                <div class="col-md-4">
                    <div class="service wow slideInLeft">
                        <div class="icon"><i class="icon-idea"></i></div>
                        <h4>Minimal <strong>Design</strong></h4>
                        <p>Suspendisse velit ticol sodales, viverra sigirton vitae, accumsan orci mauris nec</p>
                    </div>
                </div>

                <!-- *****  Service Single ***** -->
                <div class="col-md-4">
                    <div class="service wow fadeInUp">
                        <div class="icon"><i class="icon-heart"></i></div>
                        <h4>Love Our <strong>Clients</strong></h4>
                        <p>Suspendisse velit ticol sodales, viverra sigirton vitae, accumsan orci mauris nec</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service wow slideInRight">
                        <div class="icon"><i class="icon-office"></i></div>
                        <h4><strong>Professional</strong> Design</h4>
                        <p>Suspendisse velit ticol sodales, viverra sigirton vitae, accumsan orci mauris nec</p>
                    </div>
                </div>

                <!-- *****  Service Single ***** -->
                <div class="col-md-4">
                    <div class="service wow slideInLeft">
                        <div class="icon"><i class="icon-mobile"></i></div>
                        <h4><strong>Mobile</strong> App Design</h4>
                        <p>Suspendisse velit ticol sodales, viverra sigirton vitae, accumsan orci mauris nec</p>
                    </div>
                </div>

                <!-- *****  Service Single ***** -->
                <div class="col-md-4">
                    <div class="service wow fadeInUp">
                        <div class="icon"><i class="icon-code"></i></div>
                        <h4><strong>Web</strong> Development</h4>
                        <p>Suspendisse velit ticol sodales, viverra sigirton vitae, accumsan orci mauris nec</p>
                    </div>
                </div>

                <!-- *****  Service Single ***** -->
                <div class="col-md-4">
                    <div class="service wow slideInRight">
                        <div class="icon"><i class="icon-web-browser"></i></div>
                        <h4><strong>Web</strong> Design</h4>
                        <p>Suspendisse velit ticol sodales, viverra sigirton vitae, accumsan orci mauris nec</p>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div> <!-- *** end row *** -->
        </div> <!-- *** end container *** -->
    </section> <!-- *** end Why Choose Us *** -->

     <!-- =========================
       Our Skills
    ============================== -->

    <section id='our-skills' class='our-skills'>
        <div id='footer' class='row'>
            <div class='container'>
                <div class='row text-center'>
                    <div class='col-md-4'>
                        <img src='/img/leafly.png'>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <!-- <section id="our-skills" class="our-skills">
        <div class="container padding-top-large">
            <h2>
                Our
                <strong class="bold-text">Skills</strong>
                <span class="light-text main-color">Are</span>
            </h2>
            <div class="line main-bg margin-bottom-medium"></div>
            <div class="row">
                <div class="col-md-4">
                    <ul class="skill-bar">
                        <li>
                            <p>Print Design</p>
                            <div class="wrapper"><span data-width="50"></span></div>
                        </li>
                        <li>
                            <p>Web Design</p>
                            <div class="wrapper"><span data-width="80"></span></div>
                        </li>
                        <li>
                            <p>Mobile App Design</p>
                            <div class="wrapper"><span data-width="85"></span></div>
                        </li>
                        <li>
                            <p>Creativity</p>
                            <div class="wrapper"><span data-width="65"></span></div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-5">
                    <img src="/assets/img/skill-bg.jpg" class="center-block img-responsive" alt="Our Skills are excellent">
                </div>
                <div class="clearfix"></div> -->
            <!--</div>  *** end row *** -->
        <!--</div>  *** end container *** -->
    <!--</section>  *** end Our Skills *** -->


   

    <!-- =========================
       Back to top button
    ============================== -->
    <div class="back-to-top" data-rel="header">
        <i class="flaticon-up151"></i> 
    </div>
    <div class='clear-fix'></div>

    <!-- =========================
     JavaScripts
    ============================== -->
    <script src="/assets/js/vendor/jquery-1.11.1.js"></script>
    <script src="/assets/js/vendor/jquery-migrate-1.2.1.min.js"></script>
   
    <script src="/assets/js/twitterFetcher_min.js"></script>
    <script src="/assets/js/vendor/bootstrap.js"></script>
    <script src="/assets/js/wow.min.js"></script>
    <script src="/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="/assets/js/jquery.easing.min.js"></script>
    <script src="/assets/js/appear.js"></script>
    <script src="/assets/js/jquery.circliful.min.js"></script>
    <script src="/assets/js/owl.carousel.min.js"></script>
    <script src="/assets/js/nivo-lightbox.min.js"></script>
    <script src="/assets/js/isotope.pkgd.min.js"></script>
    <script src="/assets/js/main.js"></script>

    <!-- ***** My custom plugin ***** -->
    <script src="/assets/js/jquery.transit.min.js"></script>
    <!-- ***** My custom javascript ***** -->
    <script src="/assets/js/custom.js"></script>
</body>
</html>
