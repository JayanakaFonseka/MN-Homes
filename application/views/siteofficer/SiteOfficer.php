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
            <a href="<?php echo base_url('SiteOfficer/Home'); ?>" class="list-group-item active">Profile</a>
            <a href="<?php echo base_url('SiteOfficer/Markattendance'); ?>" class="list-group-item">Mark Attendence</a>
            <a href="<?php echo base_url('SiteOfficer/monthlyprojectreport'); ?>" class="list-group-item">Monthly Project Report</a>
            <a href="<?php echo base_url('SiteOfficer/inventryrequest'); ?>" class="list-group-item">Inventry Requests</a>


          </div>
        </div>
        <!-- Content Column -->
        <div class="col-lg-9 mb-4">
          <h2>Personal Details</h2>

          <div class="caption">
                          <table class="table" style="font-size: 22px">
                            <tbody>
                                <tr>
                                <td><i class="fa fa-user-circle-o" aria-hidden="true"></i> First Name</td>
                                <td><?php echo $_SESSION['fname']; ?></td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-registered" aria-hidden="true"></i> Last Name</td>
                                    <td><?php echo $_SESSION['lname']; ?></td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-institution" aria-hidden="true"></i> User Type</td>
                                    <td><?php echo $_SESSION['user_type']; ?></td>
                                </tr>
                                <tr>
                                <td><i class="fa fa-envelope-o" aria-hidden="true"></i> Email</td>
                                <td><?php echo $_SESSION['email']; ?></td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-phone" aria-hidden="true"></i> Mobile</td>
                                    <td><?php echo $_SESSION['contactno']; ?></td>
                                </tr>                                
                                <!-- <tr>
                                    <td><i class="fa fa-key" aria-hidden="true"></i>Password</td>
                                    <td><i class="fa fa-lock" aria-hidden="true"></i><a href="<?php #echo site_url('Users/getPassword/'.$_SESSION['user_id']) ?>" class="btn btn-link">Change</a></td>
                                </tr> -->
                            </tbody>
                          </table>
                        </div>

          <p> </p>
        </div>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

<?php include 'loggedin/footer.php'; ?>
