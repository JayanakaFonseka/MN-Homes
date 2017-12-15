<?php 
	if ($this->session->userdata('loggedin')) {
    	include 'loggedin/header.php';
    }
    else{
       include 'partials/header.php';
    }

?>

<div class='container'>

<h1 class="heading" style="margin-top: 50px;">Edit user</h1>

<div class="col-md-6" style="margin-top: 30px; ">

    <?php echo form_open('Manager/editUser/'.$row->id); ?>

            <div class="form-group">
            <label for="sid">User ID</label>
            <input type="text" class="form-control" id="sid" name="id" value="<?php echo $row->id ?>" readonly>
            </div>
            <div class="form-group">
            <label for="regno">First Name</label>
            <input type="text" class="form-control" id="sregno" name="fname" value="<?php echo $row->Fname ?>">
            </div>
            <div class="form-group">
                <label for="sname">Last Name</label>
                <input type="text" class="form-control" id="sname" name="lname" value="<?php echo $row->Lname ?>">
            </div>
            <div class="form-group">
                <label for="sname">Address</label>
                <input type="text" class="form-control" id="sname" name="address" value="<?php echo $row->Address ?>">
            </div>
            <div class="form-group">
                <label for="suni">Email</label>
                <input type="text" class="form-control" id="suni" name="email" value="<?php echo $row->Email ?>" readonly>
            </div>
            <div class="form-group">
                <label for="sname">Contact Number</label>
                <input type="text" class="form-control" id="sname" name="contactno" value="<?php echo $row->Contact_No ?>">
            </div>
            <div class="form-group">
			      <label for="exampleInputEmail1">User Type</label>
			      <select id="" class="form-control" name="user_type" value="<?php echo $row->UserType ?>">
			      	<option value="" disabled="disabled">Select User Type</option>
			        <option <?=$row->UserType =="manager" ? "selected" : ""?> value="manager">Manager</option>
			        <option <?=$row->UserType =="site officer" ? "selected" : ""?> value="site officer">Site officer</option>
			        <option <?=$row->UserType =="accountant" ? "selected" : ""?> value="accountant">Accountant</option>
			        <option <?=$row->UserType =="customer" ? "selected" : ""?> value="customer">Customer</option>
			      </select>
			    </div>

			    <label class="form-group">Gender</label>
		  			<div class="form-group"> 
		       		<div class="col-sm-5">
		            	<label class="radio-inline">
		                 <input name="gender" <?=$row->Gender =="Male" ? "checked" : ""?> id="input-gender-male" value="Male" type="radio" />  Male
		             	</label>
		        	</div>
		        	<div class="col-sm-5">
		             	<label class="radio-inline">
		                  <input name="gender" <?=$row->Gender =="Female" ? "checked" : ""?> id="input-gender-female" value="Female" type="radio" />  Female
		             	</label>
		         	</div>
		   		</div>
            <hr>


    <button class='btn btn-success' name='update' style='margin-bottom: 10px;'>Update</button>
    <?php echo form_close(); ?>


</div>

<div class="col-md-6" style="margin-top: 60px; ">

<?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <?php echo $this->session->flashdata('success'); ?>
        </div>
    <?php elseif ($this->session->flashdata('error')): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <?php echo $this->session->flashdata('error'); ?>
        </div>

    <?php else: ?>
<?php endif; ?>

</div>
</div>

<?php include 'loggedin/footer.php'; ?>
