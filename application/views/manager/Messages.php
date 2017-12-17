<?php if ($this->session->userdata('loggedin')) {
      include 'loggedin/header.php';
    }
    else{
       include 'partials/header.php';
    }

    ?>


<!-- Page Content -->
    <div class="container" style="min-height: 500px;">

    <br><br>
      <!-- Content Row -->
      <div class="row">
        <!-- Sidebar Column -->
        <div class="col-lg-3 mb-4">
          <div class="list-group text-center" >
            <a href="<?php echo base_url('Manager/Home'); ?>" class="list-group-item">Profile</a>
            <a href="<?php echo base_url('Manager/RegisterUser'); ?>" class="list-group-item">Register New User</a>
            <a href="<?php echo base_url('Manager/viewUsers'); ?>" class="list-group-item">Manage User</a>
            <a href="<?php echo base_url('Manager/New_project'); ?>" class="list-group-item">New Project</a>
            <a href="<?php echo base_url('Manager/viewProjects'); ?>" class="list-group-item">Project Details</a>
            <a href="<?php echo base_url('Manager/viewMessages'); ?>" class="list-group-item active">User Masseges</a>
            <a href="Manager/Home" class="list-group-item">View Reports</a>
          </div>
        </div>

		<div class="col-lg-9 mb-4">

		<h1 >Messages</h1>
		<hr>

	    	<?php if (count($records)): ?>

	    	<!-- Add new Detail card per Messages -->
	        <?php foreach ($records as $row): ?>

	        	<div class="mb-4" id="accordion" role="tablist" aria-multiselectable="true">
			        <div class="card">
			          <div class="card-header" role="tab" id="headingOne">
			            <h4 class="mb-0">
			              <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><?php echo $row->full_name; ?></a>
			            </h4>
			          </div>

			          <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
			            <div class="card-body">
			               	<?php echo $row->message; ?><br><br>
			               	<a href="mailto:<?php echo $row->email; ?>"><?php echo $row->email; ?></a><br>
			            	<?php echo $row->tele_number; ?>
			            </div>
			          </div>
			        </div>
			    </div>
		    <hr>

	      <?php endforeach; ?>

	        <?php else: ?>
	            <h3 style="margin-bottom: 50px;">No new Messages..</h3>
	        <?php endif ?>

	    </div>

		</div>
	    <!-- /.row -->

    </div>
    <!-- /.container -->

<?php include 'loggedin/footer.php'; ?>
