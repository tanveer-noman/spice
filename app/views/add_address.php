<?php include('header.php'); ?>
	
    <div id="content">
        
      <form method="POST" action="<?php echo BASE_URL.'address/addAction';?>">
        <fieldset>
          <legend>Add New Address</legend>
          <input type="text" name="first_name" id="first_name" placeholder="First name" required /><br>
          <input type="text" name="last_name" id="last_name" placeholder="Last name" required /><br>
          <input type="text" name="street" id="street" placeholder="Street" required /><br>
          <input type="text" name="zip" id="zip" placeholder="Zip" required /><br>
          <select name="city" id="cite" placeholder="City" />
              <?php if(!empty($cities)){
                  foreach($cities as $city){
              ?>
              <option value="<?php echo $city->id;?>"><?php echo $city->name;?></option>
              <?php }}else{?>
              <option value="0">No City<option>
              <?php }?>
          </select><br>
          <input type="submit" value="Save" />
        </fieldset>
      </form> 
     </div>
  <script>
    if (!("autofocus" in document.createElement("input"))) {
      document.getElementById("first_name").focus();
    }
  </script>

<?php include('footer.php'); ?>
