<? if (count($orders) == 0) 
{ ?>
	<div class="alert alert-info" role="alert">No Orders</div>

<? }
else
{
	foreach ($orders as $order) 
	{ ?>
		<div class="row">
			<div class="col-md-8"></div>
		</div>
<?	}
} ?>