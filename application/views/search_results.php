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

    <!-- ***** Responsive fixes ***** -->
    <link rel="stylesheet" href="/assets/css/responsive.css">

    <!-- ***** My Custom Stylesheet ***** -->
    <link rel="stylesheet" type="text/css" href="/assets/css/custom.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/search.css">

    <!-- Header scripts -->
    <script src="/assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="/assets/js/queryloader2.min.js"></script>
    <script src="/assets/js/vendor/jquery-1.11.1.js"></script>
</head>
<body>
	<?php include '/partials/user_nav.php'; ?>
	<div class='container margin-top-large'>
		<h2>Search Results (<?= $total ?>)</h2>
		<div class="line main-bg margin-bottom-large"></div>
		<?php foreach ($strains as $strain) { 
            $product_url = '/product/' . $strain['slug'] ?>
				<div class='row margin-bottom-large'>
					<div class='col-md-3'>
                        <a href=<?= $product_url ?>>
    						<div class="icon <?= $strain['category']; ?>">
    		    				<p class="strain"><?= $strain['category']; ?></p> 
    		    				<h1><?= $strain['symbol']; ?></h1>
    		    				<p class="strain"><?= $strain['name']; ?></p>  
    						</div>
                        </a>
					</div>
                    <div class='col-md-9'>
                        <small class="light"><?= $strain['description'] ?></small>
                        <div class='row related'>
                            <img class='rating' src="<?= $strain['star_image']; ?>">
                        </div>
                    </div>
				</div>
		<?php } ?>
        <div class='row text-center'>
            <ul class='list-inline'>
                <!-- This is pagination code -->
                <?php $page_url = '/search/1' . $this->session->flashdata('search') . '/1'; 
                $num = 1; 
                $page_class = 'page'; 
                if ($num == $page_num) {
                    $page_class .= ' active_page';
                } ?>
                <li><a href="/search/1"><div class="<?= $page_class ?>"></div></a></li>
                <?php $num = 2;
                for ($i = 1; $i < $total / 10; $i++) {
                    $page_class = 'page'; 
                    $page_url = '/search/' . $num; 
                    if ($num == $page_num) {
                        $page_class .= ' active_page';
                    } ?>
                    <li><a href="<?= $page_url ?>"><div class='<?= $page_class ?>'></div></a></li>
                <?php $num++; } ?>
            </ul>
            <!-- end pagination code -->
        </div>
	</div>
	
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