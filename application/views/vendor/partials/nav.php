<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand">
				<img style="max-width:200px; height:auto; margin-top:-20px;" alt="Brand" src="/img/logo.png" >
			</a>
		</div>
		<ul class="nav navbar-nav navbar-left">
			<li><a id="order">Orders</a></li>
			<li><a id="product">Products</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li class="dropdown">
          	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Logged in as <?= $this->session->userdata('name'); ?> <span class="caret"></span></a>
          	<ul class="dropdown-menu">
	            <li><a href="/vendors/logoff">Log Out</a></li>
          	</ul>
        </li>
		</ul>
	</div>
</nav>