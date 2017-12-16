<?php
if ($this->session->userdata('loggedin')) {
    include 'loggedin/header.php';
}
else{
    include 'partials/header.php';
}

?>


<div class="container" style="min-height: 402px;">
    <h1 class="mt-4 mb-3">Welcome
        <small><?php echo $this->session->userdata('fname'); ?>..</small>
    </h1>

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?php echo base_url(); ?>">Home</a>
        </li>
        <li class="breadcrumb-item active">Yard details</li>
    </ol>
    <div class="row">
        <!-- Sidebar Column -->
        <div class="col-lg-3 mb-4">
            <div class="list-group text-center" >
                <a href="<?php echo base_url('Accountant/Home'); ?>" class="list-group-item">Profile</a>
                <a href="<?php echo base_url('Accountant/view_attendance'); ?>" class="list-group-item">View Attendence</a>
                <a href="<?php echo base_url('Accountant/view_yard'); ?>" class="list-group-item active">Yard Details</a>
                <a href="<?php echo base_url('Accountant/add_yard_item'); ?>" class="list-group-item">Add Yard Item</a>
                <a href="<?php echo base_url('Accountant/view_project'); ?>" class="list-group-item">Project Details</a>
                <a href="" class="list-group-item">Pay-sheets</a>
                <a href="<?php echo base_url('Accountant/add_labour'); ?>" class="list-group-item">Add labour</a>
                <a href="" class="list-group-item">View Reports</a>

            </div>
        </div>

        <div class="col-lg-9 mb-4">


    </div>
</div>

<?php include 'loggedin/footer.php'; ?>
