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
    <li class="breadcrumb-item active">Send Message</li>
  </ol>


<div class="row">
        <!-- Sidebar Column -->
        <div class="col-lg-3 mb-4">
          <div class="list-group text-center" >
					  <a href="<?php echo base_url('Customer/Home'); ?>" class="list-group-item">Profile</a>
            <a href="<?php echo base_url('Customer/ViewProjects'); ?>" class="list-group-item">Project Details</a>
            <a href="<?php echo base_url('Customer/SendMessage'); ?>" class="list-group-item active">Send masseges</a>
            <a href="" class="list-group-item">View Reports</a>

          </div>
        </div>



    <div class="col-lg-8 mb-4">
        <h3>Send us a Message</h3>
    <hr>
    <?php echo validation_errors(); ?>
    <?php echo form_open('Customer/Message'); ?>

            <div class="control-group form-group">
                <div class="controls">
                    <label>Full Name:</label>
                    <input type="text" class="form-control" id="name" name="fullname" required data-validation-required-message="Please enter your name.">
                    <p class="help-block"></p>
                </div>
            </div>

            <div class="control-group form-group">
                <div class="controls">
                    <label>Phone Number:</label>
                    <input type="tel" class="form-control" id="phone" name="telenumber" required data-validation-required-message="Please enter your phone number.">
                </div>
            </div>

            <div class="control-group form-group">
                <div class="controls">
                    <label>Email Address:</label>
                    <input type="email" class="form-control" id="email" name="email" required data-validation-required-message="Please enter your email address.">
                </div>
            </div>

            <div class="control-group form-group">
                <div class="controls">
                    <label>Message:</label>
                    <textarea rows="10" cols="100" class="form-control" id="message" name="message" placeholder=" Project Title..

Message body.." required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                </div>
            </div>


            <div id="success"></div>
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-primary">Send Message</button>
    </div>
    <?php echo form_close(); ?>
</div>
<!-- /.row -->

</div>

<?php include 'loggedin/footer.php'; ?>
