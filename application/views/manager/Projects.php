<?php 
	if ($this->session->userdata('loggedin')) {
    	include 'loggedin/header.php';
    }
    else{
       include 'partials/header.php';
    }

?>


<div class="container" style="min-height: 500px;">

<br><br>

<div class="row">
        <!-- Sidebar Column -->
        <div class="col-lg-3 mb-4">
          <div class="list-group text-center" >
            <a href="<?php echo base_url('Manager/Home'); ?>" class="list-group-item">Profile</a>
            <a href="<?php echo base_url('Manager/RegisterUser'); ?>" class="list-group-item">Register New User</a>
            <a href="<?php echo base_url('Manager/viewUsers'); ?>" class="list-group-item">Manage User</a>
            <a href="<?php echo base_url('Manager/New_project'); ?>" class="list-group-item">New Project</a>
            <a href="<?php echo base_url('Manager/viewProjects'); ?>" class="list-group-item active">Project Details</a>
            <a href="<?php echo base_url('Manager/viewMessages'); ?>" class="list-group-item">User Masseges</a>
            <a href="<?php echo base_url('Manager/viewProjects2'); ?>" class="list-group-item">View Reports</a>
          </div>
        </div>

        <div class="col-lg-9 mb-4">
        <h1>Project Details</h1>



        <?php if (count($records)): ?>

        <?php foreach ($records as $row): ?>

        <hr>
        <div class="card mb-4">
        <div class="card-body">
          <div class="row">
            <div class="col-lg-6">
              <a href="#">
                <img class="img-fluid rounded" src="<?php echo base_url(); ?>assets/images/370x222.png" alt="">
              </a>
            </div>
            <div class="col-lg-6">
              <h2 class="card-title"><?php echo $row->Title; ?></h2><br>
              <h4 class="card-text"><?php echo $row->ShortD; ?></h4><br>
              <p class="card-text"><?php echo $row->LongD; ?></p>
              
            </div>
          </div>
        </div>
      </div>

      <?php endforeach; ?>

        <?php else: ?>
            <h3 style="margin-bottom: 50px;">No Projects in the database</h3>
        <?php endif ?>



	</div>
</div>
</div>

<?php include 'loggedin/footer.php'; ?>
