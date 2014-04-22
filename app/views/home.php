<?php include('header.php'); ?>
<div id="content">
    <p>List of my personal address</p>
    <?php if(!empty($addresses)):?>
    <div>
        <table class="address">
            <tr>
                <th>Firstname</th>
                <th>Lastname</th>		
                <th>Street</th>
                <th>Zip</th>
                <th>City</th>
                <th>Options</th>
            </tr>
            <?php foreach($addresses as $address){?>
            <tr>
                <td><?php echo $address->first_name;?></td>
                <td><?php echo $address->last_name;?></td>
                <td><?php echo $address->street;?></td>
                <td><?php echo $address->zip;?></td>
                <td><?php echo $address->city;?></td>
                <td>
                    <a href="<?php echo BASE_URL.'address/edit/'.$address->id;?>">Edit</a>
                    &nbsp;
                    <a href="<?php echo BASE_URL.'address/delete/'.$address->id;?>">Delete</a>
                </td>
            </tr>
            <?php }?>
        </table>
    </div>
    <?php endif;?>
</div>
<?php include('footer.php'); ?>