<?php
	if ($this->session->userdata('loggedin')) {
    	include 'loggedin/header.php';
    }
    else{
       include 'partials/header.php';
    }

?>


<div class="container" style="min-height: 402px;">


  <br><br>

  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="<?php echo base_url(); ?>">Home</a>
    </li>
    <li class="breadcrumb-item active">Projects / ReadMoreProject</li>
  </ol>


<div class="row">
        <!-- Sidebar Column -->
        <div class="col-lg-3 mb-4">
          <div class="list-group text-center" >
					  <a href="<?php echo base_url('Customer/Home'); ?>" class="list-group-item">Profile</a>
            <a href="<?php echo base_url('Customer/ViewProjects'); ?>" class="list-group-item active">Project Details</a>
            <a href="<?php echo base_url('Customer/SendMessage'); ?>" class="list-group-item">Send masseges</a>
            <a href="<?php echo base_url('Customer/viewReports/'.$_SESSION['user_id']); ?>" class="list-group-item">View Reports</a>

          </div>
        </div>


        <?php if (count($records)): ?>

        <?php foreach ($records as $row): ?>


          <div class="col-lg-9 mb-4">
          <h1><?php echo $row->Title; ?></h1>

          <div class="caption">
                          <table class="table" style="font-size: 22px">
                            <tbody>

                              <div class="col-lg-6">
                                <a href="#">
                                  <img class="img-fluid rounded" src="<?php echo base_url(); ?>assets/images/370x222.png" alt="">
                                </a>
                              </div>

                                <tr>
                                    <td><i class="fa fa-user-circle-o" aria-hidden="true"></i> First Name</td>
                                    <td><?php echo $_SESSION['fname']; ?></td>
                                </tr>

                                <tr>
                                    <td><i class="fa fa-registered" aria-hidden="true"></i> Last Name</td>
                                    <td><?php echo $_SESSION['lname']; ?></td>
                                </tr>

                                <tr>
                                    <td><i class="fa fa-sticky-note-o" aria-hidden="true"></i> Short Discription</td>
                                    <td><?php echo $row->ShortD; ?></td>
                                </tr>

                                <tr>
                                    <td><i class="fa fa-sticky-note-o" aria-hidden="true"></i> Long Discription</td>
                                    <td><?php echo $row->LongD; ?></td>
                                </tr>

                                <!-- <tr>
                                    <td><i class="fa fa-key" aria-hidden="true"></i>Password</td>
                                    <td><i class="fa fa-lock" aria-hidden="true"></i><a href="<?php #echo site_url('Users/getPassword/'.$_SESSION['user_id']) ?>" class="btn btn-link">Change</a></td>
                                </tr> -->
                            </tbody>
                          </table>
                        </div>


      <?php endforeach; ?>

        <?php else: ?>
            <h3 style="margin-bottom: 50px;">No Projects for you in the database</h3>
        <?php endif ?>



	</div>
</div>
</div>

<?php include 'loggedin/footer.php'; ?>
