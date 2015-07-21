<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="#">
				<img style="max-width:200px; height:auto; margin-top:-20px;" alt="Brand" src="/img/logo.png" >
			</a>
		</div>
		<ul class="nav navbar-nav navbar-left">
			<li><a href="/vendor/dashboard">Orders</a></li>
			<li><a id="product">Products</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li class="navbar-text">Signed in as <?= $this->session->userdata('name'); ?></li>
		</ul>
	</div>
</nav>