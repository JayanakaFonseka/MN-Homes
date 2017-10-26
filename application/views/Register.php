<?php include 'partials/header.php'; ?>


<div class="container">

	<h1>Register</h1>

	<?php if ($this->session->flashdata('msg')) {
		echo "<h3>".$this->session->flashdata('msg')."</h3>";
	}
	?>

	<hr>

	
	<?php echo validation_errors(); ?>
	<?php echo form_open('Register/RegisterUser'); ?>

	  <div class="form-group">
	    <label for="exampleInputEmail1">First Name</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="First name" name="fname">
	  </div>

	  <div class="form-group">
	    <label for="exampleInputEmail1">Last Name</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Last name" name="lname">
	  </div>

	  <div class="form-group">
	    <label for="exampleInputEmail1">Address</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Address" name="address">
	  </div>

	  <div class="form-group">
	    <label for="exampleInputEmail1">Contact Number</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Contact Number" name="contactno">
	  </div>

	  	<div class="form-group">
	      <label for="exampleInputEmail1">User Type</label>
	      <select class="form-control" name="user_type">
	        <option value="site officer">Site officer</option>
	        <option value="accountant">Accountant</option>
	        <option value="manager">Manager</option>
	        <option value="customer">Customer</option>
	      </select>
	    </div>

	    <label class="form-group">Gender:</label>
  			<div class="form-group"> 
       		<div class="col-sm-3">
            	<label class="radio-inline">
                 <input name="gender" id="input-gender-male" value="Male" type="radio" />  Male
             	</label>
        	</div>
        	<div class="col-sm-3">
             	<label class="radio-inline">
                  <input name="gender" id="input-gender-female" value="Female" type="radio" />  Female
             	</label>
         	</div>
   		</div>

	  <div class="form-group">
	    <label for="exampleInputEmail1">Email address</label>
	    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
	  </div>

	  <div class="form-group">
	    <label for="exampleInputPassword1">Password</label>
	    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
	  </div>

	  <div class="form-group">
	    <label for="exampleInputPassword1">Confirm Password</label>
	    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password" name="confirmpassword">
	  </div>

	  <button type="submit" class="btn btn-default">Submit</button>

	  <?php echo form_close(); ?>

</div>
</div>

<?php include 'partials/footer.php'; ?>
