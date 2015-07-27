<div>
    <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Vendor Name</th>
                        <th>Price (per/gram)</th>
                        <th>Quantity</th>
                        <th></th>
                        <th>Add to reservations</th>
                    </tr>
                    </thead>
                    <tbody>
<?php if($vendors){
foreach($vendors['vendor_info'] as $vendor){ ?>
<tr>
    <td><?=$vendor['name']?></td>

        
        <td>$<?=$vendor['price_gram']?></td>
    
            <td>
                <form action="/products/add" method="post">
                <input type="hidden" name="user_id" value="1">
                <input type="hidden" name="vendor_id" value="<?=$vendor['vendor_id']?>">
                <input type="hidden" name="product_id" value="<?=$vendor['product_id']?>">
                <select name="quantity">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            <td>
                <td><input class="btn btn-primary" type="submit" value="Add to reservations"><td>
            </form>
<?php }?>
<?php }?>
</tbody>
</table>