<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="#">
				<img style="max-width:200px; height:auto; margin-top:-20px;" alt="Brand" src="/img/logo.png" >
			</a>
		</div>
		<ul class="nav navbar-nav navbar-left">
            <form action="/product/" method="post">
                <input type="text" name="product_search" placeholder="Search">
                <input type="submit" value="Search" class="btn btn-success">
            </form>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li class="navbar-text">Signed in as <?= $this->session->userdata('name'); ?></li>
			<li class="navbar-text">[echo user's coins amount]</li>
		</ul>
	</div>
</nav>