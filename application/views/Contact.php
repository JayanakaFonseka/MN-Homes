
    <?php if ($this->session->userdata('loggedin')) {
      include 'loggedin/header.php';
    }
    else{
       include 'partials/header.php';
    }

    ?>


    <!-- Page Content -->
    <div class="container" style="min-height: 402px;">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Contact
        <small>Subheading</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?php echo base_url(); ?>">Home</a>
        </li>
        <li class="breadcrumb-item active">Contact</li>
      </ol>

      <!-- Content Row -->
      <div class="row">
        <!-- Map Column -->
        <!-- <div class="col-lg-8 mb-4">
           Embedded Google Map 
          <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe>
        </div> -->
        <!-- Contact Details Column -->

        <div class="col-lg-8">

          <img class="img-fluid rounded mb-4" src="<?php echo base_url(); ?>assets/images/capture.jpg" alt=""
          style="width: 800px; height: 350px;">
        </div>

        <div class="col-lg-4">
          <h3>Contact Details</h3>
          <hr>
          <p><i class="fa fa-location-arrow" aria-hidden="true"></i> No 538 1/1, First Floor,
            <br> &nbsp;&nbsp;&nbsp;&nbsp;Nawala Road, Rajagiriya.
            <br>
          </p>
          <p>
            <i class="fa fa-mobile" aria-hidden="true"></i> &nbsp;+94 77 3026023 (Hotline) 
            <br><i class="fa fa-phone" aria-hidden="true"></i> +94 11 4343880 
            <br><i class="fa fa-phone" aria-hidden="true"></i> +94 11 4343883
          </p>
          <p>
            <i class="fa fa-globe" aria-hidden="true"></i>

            <a href="http://mnhomes.lk/index.html">&nbsp;mnhomes.lk
            </a>
          </p>
          <p>
            <i class="fa fa-envelope-o" aria-hidden="true"></i>

            <a href="mn.homes@ymail.com"> &nbsp;mn.homes@ymail.com
            </a> <br>
            <i class="fa fa-envelope-o" aria-hidden="true"></i>
            <a href="info@mnhomes.lk"> &nbsp;info@mnhomes.lk</a>
          </p>

          <p>
            <i class="fa fa-hourglass-half" aria-hidden="true"></i> &nbsp;Monday - Friday: 9:00 AM to 5:00 PM
          </p>
        </div>
      </div>
      <!-- /.row -->

      <!-- Contact Form -->
      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->


    <!--   <div class="row">
        <div class="col-lg-8 mb-4">
          <h3>Send us a Message</h3>
          <form name="sentMessage" id="contactForm" novalidate>
            <div class="control-group form-group">
              <div class="controls">
                <label>Full Name:</label>
                <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Phone Number:</label>
                <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Email Address:</label>
                <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Message:</label>
                <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
              </div>
            </div>
            <div id="success"></div>
             For success/fail messages 
            <button type="submit" class="btn btn-primary" id="sendMessageButton">Send Message</button>
          </form>
        </div>

      </div>
       /.row --> 

    </div>
    <!-- /.container -->
   <?php include 'partials/footer.php'; ?>