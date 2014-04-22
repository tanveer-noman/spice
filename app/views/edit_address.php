<?php include('header.php'); ?>

    <div id="content">
      
      <form method="POST" action="<?php echo BASE_URL.'address/editAction';?>">
        <fieldset>
          <legend>Edit Address</legend>
          <input type="text" name="first_name" id="first_name" value="<?php echo $address[0]->first_name;?>" placeholder="First name" required /><br>
          <input type="text" name="last_name" id="last_name" value="<?php echo $address[0]->last_name;?>" placeholder="Last name" required /><br>
          <input type="text" name="street" id="street" value="<?php echo $address[0]->street;?>" placeholder="Street" required /><br>
          <input type="text" name="zip" id="zip" value="<?php echo $address[0]->zip;?>" placeholder="Zip" required /><br>
          <input type="hidden" name="id" value="<?php echo $address[0]->id;?>">
          <select name="city" id="cite">
              <?php if(!empty($cities)){
                  foreach($cities as $city){
              ?>
              <option value="<?php echo $city->id;?>" <?php if($address[0]->citiesid == $city->id){ echo 'selected';}?>><?php echo $city->name;?></option>
              <?php }}else{?>
              <option value="0">No City<option>
              <?php }?>
          </select><br>
          <input type="submit" value="Save" />
        </fieldset>
      </form>
     </div>
<?php include('footer.php'); ?>

