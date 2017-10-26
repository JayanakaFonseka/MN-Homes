    <?php if ($this->session->userdata('loggedin')) {
      include 'loggedin/header.php';
    }
    else{
       include 'partials/header.php';
    }

    ?>



    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Our
        <small>Services</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?php echo base_url(); ?>">Home</a>
        </li>
        <li class="breadcrumb-item active">Services</li>
      </ol>

      <!-- Image Header -->
      <img class="img-fluid rounded mb-4" src="<?php echo base_url(); ?>assets/images/3.png" alt="">

      <!-- Marketing Icons Section -->
      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Residential Constructions</h4>
            <div class="card-body">
              <p class="card-text">We provides quality construction in a timely manner with different categories of convenient and comfortable heavenly resident.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Commercial Constructions</h4>
            <div class="card-body">
              <p class="card-text">Professional highly trained personal providing quality construction. Estimating performed through field experience producing accurate while minimizing unexpected job costs.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Renovation & Modification</h4>
            <div class="card-body">
              <p class="card-text">Homes You wish to customise a basic builder style, renovate an recent home, or find out how to rework a room or lavatory, you'll produce your dream home with good designing...</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

<?php include 'partials/footer.php'; ?>
