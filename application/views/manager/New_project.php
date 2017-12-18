    <?php if ($this->session->userdata('loggedin')) {
      include 'loggedin/header.php';
    }
    else{
       include 'partials/header.php';
    }

    ?>


<div class="container">

	<br><br>

	<div class="row">
        <!-- Sidebar Column -->
        <div class="col-lg-3 mb-4">
          <div class="list-group text-center" >
            <a href="<?php echo base_url('Manager/Home'); ?>" class="list-group-item">Profile</a>
            <a href="<?php echo base_url('Manager/RegisterUser'); ?>" class="list-group-item">Register New User</a>
            <a href="<?php echo base_url('Manager/viewUsers'); ?>" class="list-group-item">Manage User</a>
            <a href="<?php echo base_url('Manager/New_project'); ?>" class="list-group-item active">New Project</a>
            <a href="<?php echo base_url('Manager/viewProjects'); ?>" class="list-group-item">Project Details</a>
            <a href="<?php echo base_url('Manager/viewMessages'); ?>" class="list-group-item">User Masseges</a>
            <a href="<?php echo base_url('Manager/viewProjects2'); ?>" class="list-group-item">View Reports</a>
          </div>
        </div>

        <div class="col-lg-9 mb-4">

			<h1>Add new Project</h1>

			<?php if ($this->session->flashdata('msg')) {
				echo "<h3>".$this->session->flashdata('msg')."</h3>";
			}
			?>

			<hr>

			
			<?php echo validation_errors(); ?>
			<?php echo form_open('Manager/add_project'); ?>

		<div class="row">
			<div class="col-lg-6">
			  <div class="form-group">
			    <label for="exampleInputEmail1">Title</label>
			    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Title" name="title">
			  </div>

			  <div class="form-group">
			    <label for="exampleInputEmail1">Customer ID</label>
			    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Customer ID" name="cus_id">
			  </div>

			  <div class="form-group">
			    <label for="exampleInputEmail1">Short Description</label>
			    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter text here..." name="shortDescription">
			  </div>
			  
			  <div class="form-group">
			    <label for="exampleInputEmail1">Long Description</label>
			    <!-- <textarea rows="7" cols="48" name="longDescription" form="usrform" placeholder=" Enter text here..."></textarea> -->
			    <textarea type="text" name="longDescription" class="form-control reserve-form empty iconified" id="longDescription" rows="7" cols="48" placeholder=" Enter text here..."></textarea>
			  </div>

			</div>

			  <div class="col-lg-6">

			  <center><h4>Customers</h4></center>

			  	<div class="table-responsive table-striped">
				    <table class="table">
				        <tr>
				            <th class="text-center">Customer ID</th>
				            <th class="text-center">Name</th>
				            
				        </tr>

				        <?php if (count($records)): ?>

				            <?php foreach ($records as $row): ?>

				            <tr>
				                <td class="text-center"><?php echo $row->id; ?></td>
				                <td class="text-center"><?php echo "$row->Fname $row->Lname" ?></td>
				                
				            </tr>

				            <?php endforeach; ?>

				        <?php else: ?>
				            <h3 style="margin-bottom: 50px;">No users in the database</h3>
				        <?php endif ?>

				    </table>
				    </div>

              </div>
	      </div>

		  <hr>

		  <button type="submit" class="btn btn-success">Submit</button>

		  <?php echo form_close(); ?>
		
	</div>
</div>
</div>

<?php include 'partials/footer.php'; ?>
