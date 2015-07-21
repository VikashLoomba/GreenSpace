<? if (count($products) == 0) 
{ ?>
	<div class="alert alert-info" role="alert">No Products</div>
	<a href="#" class="btn btn-success">Add a Product</a>
<? }
else
{
	foreach ($products as $product) 
	{ ?>
		<div class="row">
			<div class="col-md-8">
			</div>
		</div>
<?	}
} ?>