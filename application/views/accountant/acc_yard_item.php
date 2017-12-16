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
                <a href="<?php echo base_url('Accountant/view_yard'); ?>" class="list-group-item">Yard Details</a>
                <a href="<?php echo base_url('Accountant/add_yard_item'); ?>" class="list-group-item active">Add Yard Item</a>
                <a href="<?php echo base_url('Accountant/view_project'); ?>" class="list-group-item">Project Details</a>
                <a href="" class="list-group-item">Pay-sheets</a>
                <a href="<?php echo base_url('Accountant/add_labour'); ?>" class="list-group-item">Add labour</a>
                <a href="" class="list-group-item">View Reports</a>

            </div>
        </div>

        <div class="col-lg-9 mb-4">

            <h1>Add New Yard Item</h1>

            <?php if ($this->session->flashdata('msg')) {
                echo "<h3>".$this->session->flashdata('msg')."</h3>";
            }
            ?>

            <hr>


            <?php echo validation_errors(); ?>
            <?php #echo form_open('Accountant/add_labour_det'); ?>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Item Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Item name" name="item_name">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Unit price</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Unit Price" name="unit_price">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Quantity</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Quantity" name="item_quntity">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Measuring Unit</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Measuring Unit" name="measure_unit">
                    </div>

                </div>
            </div>
            <hr>

            <button type="submit" class="btn btn-default">Submit</button>

            <?php echo form_close(); ?>

        </div>

        </div>
    </div>

    <?php include 'loggedin/footer.php'; ?>
