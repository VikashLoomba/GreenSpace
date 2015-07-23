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

        <div id="nav">
            <?php include 'partials/nav.php';?>
        </div>

        <div class="container">
            <div class="row">
                <h1>Vendor: <?=$vendor_name?></h1>
                <h3>Rating: <?=$vendor_products[0]['vendor_rating']?></h3>
            </div>
            <div class ="col-md-6 pull-left">
                <?php foreach($vendor_products as $products){?>
                <div>
                    <table>
                        <tr>
                            <td><?=$products['name']?></td>
                            <td></td>
                        </tr>
                    </table>
                    <select>
                        <option></option>
                        <option></option>
                        <option></option>
                        <option></option>
                        <option></option>
                    </select>
                    <select>
                        <option></option>
                        <option></option>
                        <option></option>
                        <option></option>
                        <option></option>
                    </select>
                </div>
                <?php } ?>
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
        </script>
    </body>
</html>