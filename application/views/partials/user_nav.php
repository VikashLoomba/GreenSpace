<nav id='nav' class="navbar navbar-inverse navbar-fixed">
	<div class='container'>
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="/">
					<img style="max-width:200px; height:auto; margin-top:-20px;" alt="Brand" src="/img/logo.png">
				</a>
			</div>
			<form action='/search/1' class="navbar-form navbar-left" role="search" method='post'>
	        	<div class="form-group">
	          		<input name = 'search' type="text" class="form-control" placeholder="Search">
	        	</div>
	        	<button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
	      	</form>
	      	<ul id='nav_right_custom' class="nav navbar-nav navbar-right">
	      		<li class="dropdown">
	      	<?php if (!isset($user['id'])) 
	      	{ ?>
	      		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Welcome, Guest! <span class="caret"></span></a>
	      		<ul class="dropdown-menu">
	      			<li><a href="/login">Log In</a></li>
	      			<li role="separator" class="divider"></li>
		            <li><a href="/register">Register</a></li>
	         	</ul>
	    <?  }
	    		else{ ?>
	    			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Welcome, <?= $user['first_name']; ?>! <span class="caret"></span></a>
	          		<ul class="dropdown-menu">
			            <li><a href="/users/dashboard">User Dashboard</a></li>
			            <li><a href="#">Cart</a></li>
			            <li role="separator" class="divider"></li>
			            <li><a href="/logout">Logout</a></li>
	         		</ul>
	    	<?	} ?>
	      		
	        	</li>
	      	</ul>
		</div>

	</div>
</nav>