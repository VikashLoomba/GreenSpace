<!doctype html>
<html>
    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- SITE TITLE -->
        <title>GreenSpace | Virtual Marijuana Marketplace</title>

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

    <!-- my - obi - custom css -->
    <link rel="stylesheet" type="text/css" href="/css/products/custom.css">
    <link rel="stylesheet" type="text/css" href="/css/products/icon.css">

    <!-- Header scripts -->
    <script src="/assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="/assets/js/queryloader2.min.js"></script>

    
    
	</head>

        <!-- INCLUDE STATIC NAV BAR PARTIAL -->
        <nav class="navbar navbar-default">
            <?php include 'partials/nav.php';?>
        </nav>

    <body>
        <!-- LOAD PRODUCT INFO DIV USING PARTIALS..EVENTUALLY -> for now just static-->
        <div class="container">
            <div class="row">
                <!-- echo product name based on product id bassed  -->
                <h1>Product: <?= $search_results['name']?></h1>
            </div>
            <div class="row">
                <!-- the left column contains the strain rating and icon/images -->
                <div class ="col-md-6 pull-left">
                    <div class="display_inline">
                        <ul class="thumbs">
                            <li><img class="bud-thumb" src="<?=$search_results['photos'][0]['thumb']?>"></li>
                            <li><img class="bud-thumb" src="<?=$search_results['photos'][1]['thumb']?>"></li>
                            <li><img class="bud-thumb" src="<?=$search_results['photos'][2]['thumb']?>"></li>
                            <li><img class="bud-thumb" src="<?=$search_results['photos'][3]['thumb']?>"></li>
                        </ul>
                    </div>
                    <div class="display_inline">
                        <img id="stars" src="<?=$search_results['starImage']?>">
                        <!-- the suffix of the icon class will be echoed depending on the strain type...goddamit -->
                        <div class="icon <?=$search_results['category']?>"> 
                            <!-- the strain type will be echoed and therefore passed into the view -->
                            <p class="strain"><?=$search_results['category']?></p> <!-- strain type, float left -->
                            <!-- the symbol will be grabbed from the leafly api and echoed below -->
                            <h1><?=$search_results['symbol']?></h1>
                            <!-- the strain name will be grabbed from the leafly api and echoed below -->
                            <p class="strain"><?=$search_results['name']?></p>   <!-- strain name, float right -->
                        </div>
                    </div>
                </div>
                <!-- right column contains the strain attribute visual -->
                <div class="col-md-6" id="effects_div">
                    <h3>Effects</h3>
                    <ul class="skill-bar">
                        <li>
                            <p>Openness to novel experience:</p>
                            <div class="wrapper"><span id="open" data-width="<?=$search_results['effects'][0]['score']?>"></span></div>
                        </li>
                        <li>
                            <p>Happy:</p>
                            <div class="wrapper"><span id="happy" data-width="<?=$search_results['effects'][1]['score']?>"></span></div>
                        </li>
                        <li>
                            <p>Relaxed:</p>
                            <div class="wrapper"><span id="relaxed" data-width="<?=$search_results['effects'][2]['score']?>"></span></div>
                        </li>
                        <li>
                            <p>Uplifted:</p>
                            <div class="wrapper"><span id="uplifted" data-width="<?=$search_results['effects'][3]['score']?>"></span></div>
                        </li>
                        <li>
                            <p>Creativity:</p>
                            <div class="wrapper"><span id="creativity" data-width="<?=$search_results['effects'][4]['score']?>"></span></div>
                        </li>
                    </ul>
                </div>   
            </div>
        </div>
        </div>
        <!-- LOAD VENDOR INFO DIV USING PARTIALS -->
        <div class="container">
            <div class="row">
                <div class="col-md-12" id="vendor_div"></div>   
            </div>
        </div>



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


                <!-- // $.get("/products/effects", function(res){
                //     $("#effects_div").html(res);
                // }); -->

        <script type="text/javascript">
            $(document).ready(function(){
                $.get("/products/vendor", function(res){
                    console.log('here');
                    $("#vendor_div").html(res);
                });
            });
        </script>
	</body>
</html>