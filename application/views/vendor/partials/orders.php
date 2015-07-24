<? if (count($orders) == 0) 
{ ?>
	<div class="alert alert-info" role="alert">No Reservations</div>
<? }
else
{ ?>
	<h1>Unfulfilled Reservations</h1>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Reservation ID</th>
				<th>Created On</th>
				<th>Belongs to User ID</th>
				<th>Reservation Fulfilled?</th>
			</tr>
		</thead>
		<tbody>
			<? foreach ($orders as $order) 
				{ 
					if ($order['order_fulfilled_date'] == NULL) 
					{ ?>
						<tr>
							<td><?= $order['id']; ?></td>
							<td><?= $order['created_at']; ?></td>
							<td><?= $order['user_id']; ?></td>
							<td><input name="date" id="date_fulfilled" type="date">
							<button order="<?= $order['id']; ?>" id="add_fulfilled" class="btn btn-success btn-sm">Fulfill Reservation</button></td>
						</tr>
				<?	} ?>
			<?  } ?>
		</tbody>
	</table>
<? 
} ?>

<h1>Fulfilled Reservations</h1>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Reservation ID</th>
				<th>Created On</th>
				<th>Belongs to User ID</th>
				<th>Fulfilled On</th>
			</tr>
		</thead>
		<tbody>
			<? foreach ($orders as $order) 
				{ 
					if ($order['order_fulfilled_date'] != NULL) 
					{ ?>
						<tr>
							<td><?= $order['id']; ?></td>
							<td><?= $order['created_at']; ?></td>
							<td><?= $order['user_id']; ?></td>
							<td><?= $order['order_fulfilled_date']; ?></td>
						</tr>
				<?	} ?>
			<?  } ?>
		</tbody>
	</table>
