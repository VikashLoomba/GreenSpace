<h2>Search Results (<?= $total ?>)</h2>
		<div class="line main-bg margin-bottom-large"></div>
		<?php foreach ($strains as $strain) { 
            $product_url = '/product/' . $strain['slug'] ?>
				<div class='row margin-bottom-large'>
					<div class='col-md-3'>
                        <a href=<?= $product_url ?>>
    						<div class="icon <?= $strain['category']; ?>">
    		    				<p class="strain"><?= $strain['category']; ?></p> 
    		    				<h1><?= $strain['symbol']; ?></h1>
    		    				<p class="strain"><?= $strain['name']; ?></p>  
    						</div>
                        </a>
					</div>
                    <div class='col-md-9'>
                        <small class="light"><?= $strain['description'] ?></small>
                        <div class='row related'>
                            <img class='rating' src="<?= $strain['star_image']; ?>">
                        </div>
                    </div>
				</div>
		<?php } ?>
        <div class='row text-center'>
            <ul class='list-inline'>
                <!-- This is pagination code -->
                <?php $page_url = '/search/1' . $this->session->flashdata('search') . '/1'; 
                $num = 1; 
                $page_class = 'page'; 
                if ($num == $page_num) {
                    $page_class .= ' active_page';
                } ?>
                <li><a href="/search/1"><div class="<?= $page_class ?>"></div></a></li>
                <?php $num = 2;
                for ($i = 1; $i < $total / 10; $i++) {
                    $page_class = 'page'; 
                    $page_url = '/search/' . $num; 
                    if ($num == $page_num) {
                        $page_class .= ' active_page';
                    } ?>
                    <li><a href="<?= $page_url ?>"><div class='<?= $page_class ?>'></div></a></li>
                <?php $num++; } ?>
            </ul>
            <!-- end pagination code -->
        </div>