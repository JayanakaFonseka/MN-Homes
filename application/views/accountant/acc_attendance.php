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
        <li class="breadcrumb-item active">View Attendence</li>
    </ol>
    <!-- Content Row -->
    <div class="row">
        <!-- Sidebar Column -->
        <div class="col-lg-3 mb-4">
            <div class="list-group text-center" >
                <a href="<?php echo base_url('Accountant/Home'); ?>" class="list-group-item">Profile</a>
                <a href="<?php echo base_url('Accountant/view_attendance'); ?>" class="list-group-item active">View Attendence</a>
                <a href="" class="list-group-item">Yard Inventries</a>
                <a href="" class="list-group-item">Project Details</a>
                <a href="" class="list-group-item">Pay-sheets</a>
                <a href="<?php echo base_url('Accountant/add_labour'); ?>" class="list-group-item">Add labour</a>
                <a href="" class="list-group-item">View Reports</a>
                <a href="" class="list-group-item">View Progress</a>
            </div>
        </div>
        <!-- Content Column -->
        <div class="col-lg-9 mb-4">

            <h1 >Stored users in Databse</h1>

            <hr>
            <?php echo form_open('Accountant/view_attendance',['class'=>'form-inline']); ?>
            <div class="form-group ">
                <input type="text" class="form-control col-lg-8 " id="exampleInputEmail1" placeholder="Enter any keyword.." name="search">&nbsp;&nbsp;&nbsp;&nbsp;
                <button type="submit" class="btn btn-default">Search</button>
            </div>
            <?php echo form_close(); ?>
            <br>

            <div class="table-responsive table-striped">
                <table class="table">
                    <tr>
                        <th class="text-center">NIC</th>
                        <th>&nbsp;&nbsp;&nbsp;&nbsp;Name</th>>
                        <th>Month</th>
                        <th>&nbsp;&nbsp;&nbsp;&nbsp;Project ID</th>
                        <th>Attendance</th>
                    </tr>

                    <?php if (count($records)): ?>

                        <?php foreach ($records as $row): ?>

                            <tr>
                                <td class="text-center"><?php echo $row->id; ?></td>
                                <td><?php echo "$row->Fname $row->Lname" ?></td>
                                <td><?php echo $row->Month; ?></td>
                                <td><?php echo $row->ProjectID; ?></td>
                                <td><?php echo $row->Attendance; ?></td>

                            </tr>

                        <?php endforeach; ?>

                    <?php else: ?>
                        <h3 style="margin-bottom: 50px;">No users in the database</h3>
                    <?php endif ?>

                </table>
            </div>

        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<?php include 'loggedin/footer.php'; ?>
