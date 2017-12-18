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
                <a href="<?php echo base_url('Accountant/add_labour'); ?>" class="list-group-item">Add labour</a>

            </div>
        </div>
            <div class="col-lg-9 mb-4">

                <h1 >Stored Items in Yard</h1>

                <hr>
                <?php echo form_open('Accountant/searchyard',['class'=>'form-inline']); ?>
                <div class="form-group ">
                    <input type="text" class="form-control col-lg-8 " id="exampleInputEmail1" placeholder="Enter any keyword.." name="search">&nbsp;&nbsp;&nbsp;&nbsp;
                    <button type="submit" class="btn btn-default">Search</button>
                </div>
                <?php echo form_close(); ?>
                <br>

                <div class="table-responsive table-striped">
                    <table class="table">
                        <tr>
                            <th class="text-center">Item ID</th>
                            <th>&nbsp;&nbsp;&nbsp;&nbsp;Item Name</th>
                            <th>&nbsp;&nbsp;&nbsp;&nbsp;Qunatity</th>
                            <th>Unit Price</th>
                            <th>&nbsp;&nbsp;&nbsp;&nbsp;Measuring unit</th>
                            <th>Item Description</th>
                        </tr>

                        <?php if (count($records)): ?>

                            <?php foreach ($records as $row): ?>

                                <tr>
                                    <td class="text-center"><?php echo $row->item_id; ?></td>
                                    <td><?php echo $row->item_name ?></td>
                                    <td><?php echo $row->item_quantity; ?></td>
                                    <td><?php echo $row->unit_price; ?></td>
                                    <td><?php echo $row->measure_unit ; ?></td>
                                    <td><?php echo $row->item_des; ?></td>
                                    <th><a href="<?php #echo base_url('Accountant/edit_item/'.$row->id) ?>"><button type='submit' class='btn btn-warning'>Update</button></th></a>
                                </tr>

                            <?php endforeach; ?>

                        <?php else: ?>
                            <h3 style="margin-bottom: 50px;">No Items in the database</h3>
                        <?php endif ?>

                    </table>
                </div>

            </div>

    </div>
</div>


<?php include 'loggedin/footer.php'; ?>
