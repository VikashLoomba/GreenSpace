<div class="col-md-3"></div>
<div class="col-md-6">
	<form id="product_to_add" method="post">
		<label>Initial Stock (In grams)</label>
		<input type="text" id="stock" name="stock" required placeholder="Please enter the initial stock" class="form-control">
		<label>Price (Per gram)</label>
		<input type="text" id="price" name="price" required placeholder="Please enter the initial price" class="form-control">
		<input type="hidden" name="product_id" value="<?= $product_id ?>" id="product_id">
		<input type="hidden" name="vendor_id" value="<?= $vendor_id ?>" id="vendor_id">
	</form>
	<button id="add_prod" class="btn btn-default">Add to Catalogue</button>
</div>