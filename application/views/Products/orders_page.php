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

    <!-- ***** Jason custom Stylesheet ***** -->
    <link rel="stylesheet" type="text/css" href="/assets/css/custom.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/search.css">

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
        <?php include 'partials/nav.php'; ?>

    <body>      

    <?php if($open_reservations != null){?>
        <div class="container">
            <div class="row">
                <h1>Open Reservations</h1>
                <div class="col-md-6">
                    <table class="table">
                        <th>Order #</th>
                        <th>Pending reservation(s)</th>
                        <th>Order quantity</th>
                        <th>Confirm</th>
                    <?php foreach($open_reservations as $reservation){?>
                        <tr>
                            <td><?=$reservation['order_id']?></td>
                            <td><?=$reservation['name']?></td>
                            <td><?=$reservation['quantity']?></td>
                            <td><a href="/confirm/<?=$reservation['order_id']?>" class="btn btn-primary">Confirm reservation for this order?</a></td>
                        </tr>
                    <?php }?>
                    </table>
                </div>
            </div>
        </div>
    <?php }?>
    <?php if($open_reservations == null){?>
        <div class="container">
            <div class="row">
                <h3 class="text-center">You have no unfulfilled reservations!</h3>
            </div>
        </div>
    <?php }?>



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
                    $("#vendor_div").html(res);
                });
            });
        </script>
    </body>
</html>