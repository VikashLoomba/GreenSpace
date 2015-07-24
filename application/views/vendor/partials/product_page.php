<div class="col-md-3"></div>
<div class="col-md-6">
	<form id="edit" method="post">
		<label>Current Stock: <?= $product['stock_gram']; ?></label>
		<input type="text" previous="<?= $product['stock_gram']; ?>" id="stock" name="stock" required placeholder="Please enter the new stock (empty if no change)" class="form-control">
		<label>Current Price: $<?= $product['price_gram']; ?></label>
		<input type="text" previous="<?= $product['price_gram']; ?>" id="price" name="price" required placeholder="Please enter the new price (empty if no change)" class="form-control">
		<input type="hidden" name="id" value="<?= $id; ?>" id="id">
		<button id="edit_prod" class="btn btn-default">Add to Catalogue</button>
	</form>
</div>

