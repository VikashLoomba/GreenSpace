<!doctype html>
<html>
    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- SITE TITLE -->
        <title>GreenSpace | Virtual Marijuana Marketplace</title>

        <link rel="stylesheet" href="/landing/css/bootstrap.css">
        <link rel="stylesheet" href="/landing/css/animate.min.css">    
        <link rel="stylesheet" href="/landing/css/main.css">
        <link rel="stylesheet" type="text/css" href="/css/products/custom.css">
        <link rel="stylesheet" type="text/css" href="/css/products/icon.css">
        <script src="/landing/js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="/landing/js/queryloader2.min.js"></script>
    
	</head>

	<body>

        <!-- INCLUDE STATIC NAV BAR PARTIAL -->
        <div id="nav">
            <?php include 'partials/nav.php';?>
        </div>

        <!-- LOAD PRODUCT INFO DIV USING PARTIALS..EVENTUALLY -> for now just static-->
        <div class="container" id="product_info">
            <div class="row">
                <!-- echo product name based on product id bassed  -->
                <h1>Product: <?= $search_results['name']?></h1>
            </div>
            <div class="row">
                <!-- the left column contains the strain rating and icon/images -->
                <div class ="col-md-6 pull-left">
                    <div class="display_inline">
                        <ul class="thumbs">
                            <li><img src="<?=$search_results['photos'][0]['thumb']?>"></li>
                            <li><img src="<?=$search_results['photos'][1]['thumb']?>"></li>
                            <li><img src="<?=$search_results['photos'][2]['thumb']?>"></li>
                            <li><img src="<?=$search_results['photos'][3]['thumb']?>"></li>
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
                    <ul class="skill-bar">
                        <li>
                            <p>Openness to novel experience: </p> <?=$search_results['effects'][0]['score']?>
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

        <!-- LOAD VENDOR INFO DIV USING PARTIALS -->
        <div class="container">
            <div class="row">
                <div class="col-md-12" id="vendor_div"></div>   
            </div>
        </div>



        <script src="/landing/js/vendor/jquery-1.11.1.js"></script>
        <script src="/landing/js/vendor/bootstrap.js"></script>
        <script src="/landing/js/wow.min.js"></script>
        <script src="/landing/js/imagesloaded.pkgd.min.js"></script>
        <script src="/landing/js/appear.js"></script>
        <script src="/landing/js/isotope.pkgd.min.js"></script>
        <script src="/landing/js/main.js"></script>


        <script type="text/javascript">
            $(document).ready(function(){
                // $.get("/products/effects", function(res){
                //     $("#effects_div").html(res);
                // });
                $.get("/products/vendor", function(res){
                    $("#vendor_div").html(res);
                });
            });
        </script>
	</body>
</html>