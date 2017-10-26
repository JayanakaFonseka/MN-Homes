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
      <h1 class="mt-4 mb-3">About
        <small>Our Company..</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?php echo base_url(); ?>">Home</a>
        </li>
        <li class="breadcrumb-item active">About</li>
      </ol>

      <!-- Intro Content -->
      <div class="row">
        <div class="col-lg-6">

          <img class="img-fluid rounded mb-4" src="<?php echo base_url(); ?>assets/images/370x222.png" alt=""
          style="width: 750px; height: 400px;">

          <h2>Why us..?</h2>
          <hr>

          <p>MN Homes helps makes your dream of owning a house, a reality: creating your own unique design on your own land, meeting your budget, type of lifestyle and taste. Our Architects and designers will advice you during the design process as well as the stages in construction, to maintain architectural quality of the building. For better understanding of the design, 3-Dimensionally processed computerized visuals and walkthroughs are available on request at a nominal fee. </p>

        </div>

        <div class="col-lg-6">

          <img class="img-fluid rounded mb-4" src="<?php echo base_url(); ?>assets/images/picofceo.jpg" alt=""
          style="width: 200px; height: 200px;">
          <h4 style="float: right; position: absolute; margin-left: 220px; margin-top: -210px;">Manoj Roshan Wewage</h4>
          <h6 style="float: right; position: absolute; margin-left: 220px; margin-top: -170px;">Managing Director</h6>

          <h2>MN Homes</h2>
          <hr>

          <p>Specializing in constructing exclusive homes and corporate undertakings island-wide, MN Homes Developer (Pvt) Ltd is an experienced public and private contractor that emphasizes on quality constructions and efficient management of resources. Our commitment is that we consider all customers to be of high value; hence we listen to your needs and ensure that we clearly understand your requirements and concerns, prior to embarking on providing you with the best in service.</p>

          <p>MN Homes Developer (Pvt) Ltd is registered with ICTAD (Institute for construction Trading and Development) under the Ministry of Constructions and Engineering services.</p>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti eum ratione ex ea praesentium quibusdam? Aut, in eum facere corrupti necessitatibus perspiciatis quis?</p>
        </div>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
    
    <?php include 'partials/footer.php'; ?>
