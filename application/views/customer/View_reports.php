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

<ol class="breadcrumb">
	<li class="breadcrumb-item">
		<a href="<?php echo base_url(); ?>">Home</a>
	</li>
	<li class="breadcrumb-item active">View Reports</li>
</ol>

<div class="row">
        <!-- Sidebar Column -->
        <div class="col-lg-3 mb-4">
          <div class="list-group text-center" >
            <a href="<?php echo base_url('Customer/Home'); ?>" class="list-group-item">Profile</a>
            <a href="<?php echo base_url('Customer/viewProjects'); ?>" class="list-group-item">Project Details</a>
            <a href="<?php echo base_url('Customer/SendMessage'); ?>" class="list-group-item">Send masseges</a>
            <a href="<?php echo base_url('Customer/viewReports/'.$_SESSION['user_id']); ?>" class="list-group-item active">View Reports</a>
          </div>
        </div>

        <div class="col-lg-9 mb-4">
        <h1>Project Reports</h1>



        <?php if (count($records)): ?>

        <?php foreach ($records as $row): ?>

        <hr>
        <div class="card mb-4">
        <div class="card-body">
          <div class="row">
            <div class="col-lg-6">
              <img class="img-fluid rounded" style="margin-bottom: 10px;" src="<?php echo base_url(); ?><?php echo $row->image1; ?>" alt="">
              <img class="img-fluid rounded" style="margin-bottom: 10px;" src="<?php echo base_url(); ?><?php echo $row->image2; ?>" alt="">
              <img class="img-fluid rounded" style="margin-bottom: 10px;" src="<?php echo base_url(); ?><?php echo $row->image3; ?>" alt="">

            </div>
            <div class="col-lg-6">
              <h2 class="card-title"><?php echo $row->Title; ?></h2><br>
              <h4 class="card-text"><?php echo $row->ShortD; ?></h4><br>
              <h5 class="card-text"><?php echo $row->date; ?></h5><br>
              <p class="card-text"><?php echo $row->content; ?></p>

            </div>
          </div>
        </div>
      </div>

      <?php endforeach; ?>

        <?php else: ?>
            <br><h3 style="margin-bottom: 50px;">No Reports in the database</h3>
        <?php endif ?>



	</div>
</div>
</div>

<?php include 'loggedin/footer.php'; ?>
