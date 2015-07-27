<div id="loginbox" class="mainbox col-md-12"> 
     <div class="panel panel-default">		
     	<div class="panel-heading">
            <div class="panel-title text-center">Reservations</div>
        </div> 
	    <div class="panel-body">     
			<div class="form-group">
				<h5>Last 5 Reservations:</h5>
				<table class="table table-hover">
					<thead>
					<tr>
						<th>Order ID</th>
						<th>Product</th>
						<th>Quantity</th>
					</tr>
					</thead>
					<tbody>
						<?php
						$count = 0;
						
							foreach ($orders as $order)
							{ 
								while ($count < 5) {
								?>
								<tr>
									<td><?= $order['id']; ?></td>
									<td><?= $order['name']; ?></td>
									<td><?= $order['quantity']; ?></td>
								</tr>
						<? 		$count++;
							} 

					}?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>