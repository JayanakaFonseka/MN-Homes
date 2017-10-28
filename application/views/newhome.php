    <?php if ($this->session->userdata('loggedin')) {
      include 'loggedin/header.php';
    }
    else{
       include 'partials/header.php';
    }

    ?>



    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('<?php echo base_url(); ?>assets/images/4.png')">
            <div class="carousel-caption d-none d-md-block">
              <!-- <h3>First Slide</h3>
              <p>This is a description for the first slide.</p> -->
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('<?php echo base_url(); ?>assets/images/2.png')">
            <div class="carousel-caption d-none d-md-block">
              <!-- <h3>Second Slide</h3>
              <p>This is a description for the second slide.</p> -->
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('<?php echo base_url(); ?>assets/images/MNhomes.png')">
            <div class="carousel-caption d-none d-md-block">
              <!-- <h3>Third Slide</h3>
              <p>This is a description for the third slide.</p> -->
            </div>
            <!-- Slide four - Set the background image for this slide in the line below -->
          

          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>

    <!-- Page Content -->
    <div class="container">
      <hr>
      <h3 class="my-4 text-center">Just........ Sit back and relax while we build your Dream Home</h3>
      <hr>


      <!-- Portfolio Section -->

      <div class="row">
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="<?php echo base_url(); ?>assets/images/house.png" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Housing constructions</a>
              </h4>
              <p class="card-text">
              <h5>We help to make your dream a reality</h5>

                    We build Houses on your land, anywhere in Sri Lanka, to standard quality,suit your budget and requirements. The company is focused on innovative design and customer service.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="<?php echo base_url(); ?>assets/images/com.png" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Commercial buildings</a>
              </h4>
              <p class="card-text">
<h5>standard quality construction solutions</h5>

We are committed to deliver standard quality constru ction solutions on time and according to the guidance of our technical and professional staff.
</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="<?php echo base_url(); ?>assets/images/services3.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Land developments</a>
              </h4>
              <p class="card-text">
<h5>Conception planning for your dream</h5>

The company has engineering superiority developing lands according to the latest methodologies using state-of-the art equipment and ensuring all proper water drainage systems and land filling methods are used.
</p>
            </div>
          </div>
        </div>
      </div>

      <hr>

      <!-- Call to Action Section -->

    </div>
    <!-- /.container -->

<?php include 'partials/footer.php'; ?>
