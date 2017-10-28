    <?php if ($this->session->userdata('loggedin')) {
      include 'loggedin/header.php';
    }
    else{
       include 'partials/header.php';
    }

    ?>


<div class="container">

	<h1 class="mt-4 mb-3"></h1>

	<div class="row">
        <!-- Sidebar Column -->
        <div class="col-lg-3 mb-4">
          <div class="list-group text-center" >
            <a href="<?php echo base_url('Manager/Home'); ?>" class="list-group-item">Profile</a>
            <a href="<?php echo base_url('Register/RegisterUser'); ?>" class="list-group-item active">Register New User</a>
            <a href="<?php echo base_url('ManageUsers/viewUsers'); ?>" class="list-group-item">Manage User</a>
            <a href="services.html" class="list-group-item">Project Details</a>
            <a href="contact.html" class="list-group-item">User comments/masseges</a>
            <a href="contact.html" class="list-group-item">View Progress</a>
            <a href="contact.html" class="list-group-item">View Reports</a>
            <a href="contact.html" class="list-group-item">Add Special Announcements</a>
          </div>
        </div>

        <div class="col-lg-9 mb-4">

			<h1>Register New User</h1>

			<?php if ($this->session->flashdata('msg')) {
				echo "<h3>".$this->session->flashdata('msg')."</h3>";
			}
			?>

			<hr>

			
			<?php echo validation_errors(); ?>
			<?php echo form_open('Register/RegisterUser'); ?>

			<div class="col-lg-6">
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
			    <label for="exampleInputEmail1">Email address</label>
			    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
			  </div>

			  <div class="form-group">
			    <label for="exampleInputEmail1">Contact Number</label>
			    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Contact Number" name="contactno">
			  </div>

			  	<div class="form-group">
			      <label for="exampleInputEmail1">User Type</label>
			      <select class="form-control" name="user_type">
			      	<option value="" selected="selected" disabled="disabled">Select User Type</option>
			        <option value="manager">Manager</option>
			        <option value="site officer">Site officer</option>
			        <option value="accountant">Accountant</option>
			        <option value="customer">Customer</option>
			      </select>
			    </div>

			    <label class="form-group">Gender</label>
		  			<div class="form-group"> 
		       		<div class="col-sm-5">
		            	<label class="radio-inline">
		                 <input name="gender" id="input-gender-male" value="Male" type="radio" />  Male
		             	</label>
		        	</div>
		        	<div class="col-sm-5">
		             	<label class="radio-inline">
		                  <input name="gender" id="input-gender-female" value="Female" type="radio" />  Female
		             	</label>
		         	</div>
		   		</div>

			  <div class="form-group">
			    <label for="exampleInputPassword1">Password</label>
			    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
			  </div>

			  <div class="form-group">
			    <label for="exampleInputPassword1">Confirm Password</label>
			    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password" name="confirmpassword">
			  </div>
			  </div>
			  <hr>

			  <button type="submit" class="btn btn-default">Submit</button>

			  <?php echo form_close(); ?>

		</div>
	</div>
</div>

<?php include 'partials/footer.php'; ?>
