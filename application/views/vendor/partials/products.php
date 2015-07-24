<? if (count($products) == 0) 
{ ?>
	<div class="alert alert-info" role="alert">No Products</div>
<? }
else
{	?>
	<table class="table table-hover">
	<thead>
		<tr>
			<th>Strain Name</th>
			<th>Stock(in grams)</th>
			<th>Price(per gram)</th>
			<th>Edit Product</th>
		</tr>
	</thead>
	<tbody>	
<?	foreach ($products as $product) 
	{ ?>
	<tr>
		<td><?= $product['name']; ?></td>
		<td><?= $product['stock_gram']; ?></td>
		<td>$<?= $product['price_gram']; ?></td>
		<td><a vendor="<?= $product['vend_prod_id']; ?>" product="<?= $product['id']; ?>" class="btn btn-danger" id="show_product">Edit</a></td>
	</tr>
<?	} ?>
	</tbody>
	</table>
<? } ?>
<div class="row">
	<form id="product_search" method="post">
		<div class="col-md-4">
			<input id="search_box" type="text" class="form-control" name="search_query" placeholder="Search for a product">
		</div>  
		<a id="search_submit" class="btn btn-primary btn-info">Submit</a>
	</form>	
</div>


