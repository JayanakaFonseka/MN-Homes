
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
        <h1 class="mt-4 mb-3">Contact <small>Us !</small></h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active">Contact</li>
        </ol>

        <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
            <div class="col-lg-8 mb-4">
                <!-- Embedded Google Map -->
                <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.8607971246506!2d79.89749031431774!3d6.907243995009054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae259f25555557b%3A0xbd38cbc3ee78ce03!2sHomes+Constructions+Developers+Sri+Lanka!5e0!3m2!1sen!2slk!4v1513521973289"></iframe>
            </div>
            <!-- Contact Details Column -->
            <div class="col-lg-4 mb-4">
                <h3>Contact Details</h3>
                <p>
                    No 538 1/1, First Floor,
                    Nawala Road
                    <br>Sri Jayawardenepura, Sri Lanka.
                    <br>
                </p>
                <p>
                    <abbr title="Phone">Phone</abbr>: +94 77 3026023 (Hotline)
                </p>
                <p>
                    <abbr title="Email">Email</abbr>: mn.homes@ymail.com
                    </a>
                </p>
                <p>
                    <abbr title="Wsite">Web Site</abbr>: <a href="http://mnhomes.lk/about.html">mnhomes.lk
                    </a>
                </p>
                <p>
                    <abbr title="Hours">Hours</abbr>: Monday - Friday: 9:00 AM to 4:00 PM
                </p>
            </div>
        </div>
        <!-- /.row -->

        <!-- Contact Form -->
        <div class="row">
            <div class="col-lg-8 mb-4">
                <h3>Send us a Message</h3>
            <hr>           
            <?php echo validation_errors(); ?>
            <?php echo form_open('Manager/ContactUser'); ?>
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
                            <textarea rows="10" cols="100" class="form-control" id="message" name="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
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
    <!-- /.container -->

    
   <?php include 'partials/footer.php'; ?>