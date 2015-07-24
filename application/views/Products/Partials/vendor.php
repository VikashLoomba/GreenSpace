<div class="col-md-6 col-md-offset-6" id="vendor">
    <?php if($vendors['vendor_info']){
        // echo '<pre>';
        // var_dump($vendors);
        // die();

        ?>
    <div>
        <h3>Vendor Name:<?=$vendors['vendor_info'][0]['name']?></h3>
    </div>
    <div>
        <!-- this price will change to reflect the users choice in the drop downs below...wtf -->
        <h3 id="price_gm">Price/gm: <?=$vendors['vendor_info'][0]['price_gram']?></h3>
    </div>
    <div>
        <div>
            <form action="/products/add" method="post">
                <!-- change the value below to echo the logged in user -->
                <input type="hidden" name="user_id" value="1">
                <input type="hidden" name="vendor_id" value="<?=$vendors['vendor_info'][0]['vendor_id']?>">
                <input type="hidden" name="product_id" value="<?=$vendors['strain_id']['id']?>">
                <select name="quantity">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>3</option>
                </select>
                <input type="submit" value="Add to reservations">
            </form>
        </div>
    </div>
<?php }?>