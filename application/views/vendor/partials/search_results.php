<? if (count($search_results) == 0) 
{ ?>
	<div class="alert alert-info" role="alert">No Products Found</div>
<? }
else
{	?>
	<table class="table table-hover">
	<thead>
		<tr>
			<th>Strain Name</th>
			<th>Description</th>
			<th>Add to Products?</th>
		</tr>
	</thead>
	<tbody>	
<?	foreach ($search_results as $result) 
	{ ?>
	<tr>
		<td><?= $result['name']; ?></td>
		<td><?= $result['short_description']; ?></td>
		<td><button id="add_product" product="<?= $result['id'];?>" class="btn btn-default">Add?</button></td>
	</tr>
<?	} ?>
	</tbody>
	</table>
<? } 
?>
<div class="row">
	
		<form id="product_search" method="post">
			<div class="col-md-4">
				<input id="search_box" type="text" class="form-control" name="search_query" placeholder="Search for a product">
			</div>  
			<a id="search_submit" class="btn btn-primary btn-info">Submit</a>
		</form>
	
</div>
