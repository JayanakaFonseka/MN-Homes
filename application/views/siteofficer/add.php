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
      <h1 class="mt-4 mb-3">Welcome
        <small><?php echo $this->session->userdata('fname'); ?>..</small>
      </h1>



      <!-- Content Row -->
      <div class="row">
        <!-- Sidebar Column -->
        <div class="col-lg-3 mb-4">
          <div class="list-group text-center" >
            <a href="<?php echo base_url('SiteOfficer/Home'); ?>" class="list-group-item ">Profile</a>
            <a href="<?php echo base_url('SiteOfficer/Markattendance'); ?>" class="list-group-item active">Mark Attendence</a>

            <a href="<?php echo base_url('SiteOfficer/inventryrequest'); ?>" class="list-group-item">Inventry Requests</a>
            <a href="<?php echo base_url('SiteOfficer/monthlyprojectreport'); ?>" class="list-group-item">Monthly Project Report</a>

          </div>
        </div>
  <!-- Content Column -->
      <div class="col-lg-9 mb-4">
        <div class="welltextcenter">
          <h2>
            
          </h2>
        </div>
        <div class="panel panel default">
          <div class="panelheading">
            <h2>            

              <a href="<?php echo base_url('SiteOfficer/Markattendance'); ?>" class="btn btn-primary ">back</a>
            </h2>

          </div>
          <div class="panel-body">
            <div class="well text-center" style="font-size: 20px">
              <strong>DATE: <?php $cur_date=date('y-m-d'); echo $cur_date; ?></strong>
            </div> 
            <hr>
            <?php if ($this->session->flashdata('msg')) {
                echo "<h3>".$this->session->flashdata('msg')."</h3>";
            }
            ?>
                  <?php echo validation_errors(); ?>
                  <?php echo form_open('SiteOfficer/addlabour_det'); ?>


        <div class="form-group">
                <label for="name">First Name</label>
                <input type="text" id="labourname" class="form-control" name="fname" required="">
              </div>
              <div class="form-group">
                <label for="name">Last Name:</label>
                <input type="text" id="labourid" class="form-control" name="lname" required="">
              </div>
              <div class="form-group">
                <label for="name">Address:</label>
                <input type="text" id="labourname" class="form-control" name="address" required="">
              </div>
              <div class="form-group">
                <label for="name">NIC:</label>
                <input type="text" id="labourname" class="form-control" name="nic" required="">
              </div>
              <div class="form-group">
                <label for="name">Contact Number:</label>
                <input type="text" id="labourname" class="form-control" name="cnumber" required="">
              </div>
              <div class="form-group">
                <label for="name">Gender:</label><br>
                <input  type="radio" name="gender" value="male"> Male<br>
                <input type="radio" name="gender"  value="female"> Female<br>
              </div>

              <div class="form-group">
                <input  type="submit" class="btn btn-success" name="submit" value="Add Labour">
              <?php echo form_close(); ?> 
                
               
              </div>


           
          </div>

        </div>
      </div>
      <!-- /.row -->
    </div>
  </div>

</div> <!-- /.container -->

<?php include 'loggedin/footer.php'; ?>
