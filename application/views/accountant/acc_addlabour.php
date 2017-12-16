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

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?php echo base_url(); ?>">Home</a>
        </li>
        <li class="breadcrumb-item active">Add labour</li>
    </ol>

    <!-- Content Row -->
    <div class="row">
        <!-- Sidebar Column -->
        <div class="col-lg-3 mb-4">
            <div class="list-group text-center" >
                <a href="<?php echo base_url('Accountant/Home'); ?>" class="list-group-item">Profile</a>
                <a href="<?php echo base_url('Accountant/view_attendance'); ?>" class="list-group-item">View Attendence</a>
                <a href="<?php echo base_url('Accountant/view_yard'); ?>" class="list-group-item">Yard Details</a>
                <a href="<?php echo base_url('Accountant/add_yard_item'); ?>" class="list-group-item">Add Yard Item</a>
                <a href="<?php echo base_url('Accountant/view_project'); ?>" class="list-group-item">Project Details</a>
                <a href="" class="list-group-item">Pay-sheets</a>
                <a href="<?php echo base_url('Accountant/add_labour'); ?>" class="list-group-item active">Add labour</a>
                <a href="" class="list-group-item">View Reports</a>
            </div>
        </div>
        <!-- Content Column -->
        <div class="col-lg-9 mb-4">

            <h1>Add New Labour</h1>

            <?php if ($this->session->flashdata('msg')) {
                echo "<h3>".$this->session->flashdata('msg')."</h3>";
            }
            ?>

            <hr>


            <?php echo validation_errors(); ?>
            <?php echo form_open('Accountant/add_labour_det'); ?>
<div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">First Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="First name" name="fname">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Last Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Last name" name="lname">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Address" name="address">
                </div>


            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">NIC</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="NIC" name="nic">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Contact Number</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Contact Number" name="contactno">
                </div>


                <label class="form-group">Gender</label>
                <div class="form-group">
                    <div class="col-sm-5">
                        <label class="radio-inline">
                            <input name="gender" id="input-gender-male" value="Male" type="radio" />  Male
                        </label>
                    </div>
                    <div class="col-sm-5">
                        <label class="radio-inline">
                            <input name="gender" id="input-gender-female" value="Female" type="radio" />  Female
                        </label>
                    </div>
                </div>
            </div>
            </div>
            <hr>

            <button type="submit" class="btn btn-default">Submit</button>

            <?php echo form_close(); ?>

        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<?php include 'loggedin/footer.php'; ?>
