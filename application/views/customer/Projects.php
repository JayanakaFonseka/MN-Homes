<?php
	if ($this->session->userdata('loggedin')) {
    	include 'loggedin/header.php';
    }
    else{
       include 'partials/header.php';
    }

?>


<div class="container" style="min-height: 402px;">


	<h1 class="mt-4 mb-3">MN Homes
	</h1>

	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="<?php echo base_url(); ?>">Home</a>
		</li>
		<li class="breadcrumb-item active">Projects</li>
	</ol>


<div class="row">
        <!-- Sidebar Column -->
        <div class="col-lg-3 mb-4">
          <div class="list-group text-center" >
					  <a href="<?php echo base_url('Customer/Home'); ?>" class="list-group-item">Profile</a>
            <a href="<?php echo base_url('Customer/ViewProjects'); ?>" class="list-group-item active">Project Details</a>
            <a href="<?php echo base_url('Customer/SendMessage'); ?>" class="list-group-item">Send masseges</a>
            <a href="" class="list-group-item">View Reports</a>

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
              <h2 class="card-title"><?php echo $row->Title; ?></h2>
              <p class="card-text"><?php echo $row->ShortD; ?></p>
              <a href="<?php echo base_url('Customer/ViewSelectedProject/'.$row->id); ?>" class="btn btn-primary">Read More &rarr;</a>
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

<br><br><br><br><br><br>

<?php include 'loggedin/footer.php'; ?>
