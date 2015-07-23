<div class="col-md-6 col-md-offset-6" id="vendor">
    <div>
        <h3>Vendor Name:<?=$vendors[0]['name']?></h3>
        <h3>Vendor Rating: <?=$vendors[0]['vendor_rating']?></h3>
    </div>
    <div>
        <!-- this price will change to reflect the users choice in the drop downs below...wtf -->
        <h3 id="price_gm">Price/gm: <?=$vendors[0]['price_gm']?></h3>
    </div>
    <div>
        <div>
            <select>
                <option>4</option>
                <option>3</option>
                <option>2</option>
            </select>
            <select>
                <option>gram</option>
                <option>eighth</option>
                <option>quarter</option>
                <option>ounce</option>
            </select>
        </div>
        <div>
            <button></button>
        </div>
    </div>
</div>