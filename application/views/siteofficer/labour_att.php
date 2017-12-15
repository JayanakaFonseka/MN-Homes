
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
        <li class="breadcrumb-item active">Profile</li>
    </ol>

    <!-- Content Row -->
    <div class="row">
        <!-- Sidebar Column -->
        <div class="col-lg-3 mb-4">
            <div class="list-group text-center" >
                <a href="<?php echo base_url('SiteOfficer/labour_att'); ?>" class="list-group-item">Mark Attendence</a>
                <a href="" class="list-group-item">Site Report</a>
                <a href="" class="list-group-item">Project Details</a>
                <a href="" class="list-group-item">Inventry Requests</a>
                <a href="" class="list-group-item">Site Progress</a>
                <a href="" class="list-group-item">Manage Labours</a>
                <a href="" class="list-group-item">Site Officer</a>
            </div>
        </div>
        <!-- Content Column -->
    </div>
    <!-- /.row -->

    <!-- /.container -->

<?php include 'loggedin/footer.php'; ?>
