<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="/css/vendor/vendor.css">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="/js/vendor/vendor.js"></script>
	<script src="/js/bootstrap.js"></script>
	<!-- LOAD Orders Partial -->
	<script type="text/javascript">
	$(document).ready(function(){
		$.get("/vendors/orders", function(order){
			$("#primary").html(order);
		});
	});
	/*LOAD products partial (if clicked)*/
	$(document).on('click', '#product', function(){
		$.get("/vendors/products", function(product){
			$("#primary").html(product);
		});
	});
	/*End load products partial*/
	</script>
	<!-- End Partial for Orders -->
    <title>Vendor Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
</head>
<!-- START NAVIGATION -->
<div id="nav">
<?php include 'partials/nav.php';?>
</div>
<!-- END NAVIGATION -->

<!-- Start Body -->
<body>

	<!-- Orders -->
<div id="primary" class="container-fluid"></div>
	<!-- End Orders -->

	<!-- Products -->
<div id="products" class="container-fluid"></div>
	<!-- End Products -->


</body>
<!-- End Body -->
</html>