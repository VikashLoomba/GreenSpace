<div id="loginbox" class="mainbox col-md-12"> 
     <div class="panel panel-default">		
     	<div class="panel-heading">
            <div class="panel-title text-center">User Information</div>
        </div> 
	    <div class="panel-body">     
			<div class="form-group">
				<label>First Name: <?=$user['first_name'];?></label>
			</div>
			<div class="form-group">
				<label>Last Name:  <?=$user['last_name'];?></label>
			</div>
			<div class="form-group">
				<label>Birthdate:  <?=$user['birthdate'];?></label>
			</div>
			<div class="form-group">
				<label>Email: <?=$user['email'];?></label>
			</div>
			<div class="form-group">
				<label>Phone Number:  <?=$user['phone_number'];?></label>
			</div>
			<div class="form-group">
				<button id="update_information" class="btn btn-info pull-right">Update Your Information?</button>
			</div>
		</div>
	</div>
</div>
