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

<div class="row">
        <!-- Sidebar Column -->
        <div class="col-lg-3 mb-4">
          <div class="list-group text-center" >
            <a href="<?php echo base_url('Manager/Home'); ?>" class="list-group-item active">Profile</a>
            <a href="<?php echo base_url('Manager/RegisterUser'); ?>" class="list-group-item">Register New User</a>
            <a href="<?php echo base_url('Manager/viewUsers'); ?>" class="list-group-item">Manage User</a>
            <a href="<?php echo base_url('Manager/Home'); ?>" class="list-group-item">New Project</a>
            <a href="<?php echo base_url('Manager/viewProjects'); ?>" class="list-group-item">Project Details</a>
            <a href="<?php echo base_url('Manager/viewMessages'); ?>" class="list-group-item">User Masseges</a>
            <a href="Manager/Home" class="list-group-item">View Reports</a>
          </div>
        </div>

<div class="col-lg-9 mb-4">

<h1 >Stored users in Databse</h1>
	
	<hr>   
            <?php echo form_open('Manager/searchUsers',['class'=>'form-inline']); ?>
            <div class="form-group ">
                <input type="text" class="form-control col-lg-8 " id="exampleInputEmail1" placeholder="Enter any keyword.." name="search">&nbsp;&nbsp;&nbsp;&nbsp;
                <button type="submit" class="btn btn-default">Search</button>
            </div>
            <?php echo form_close(); ?>
            <br>
            
    <div class="table-responsive table-striped">
    <table class="table">
        <tr>
            <th class="text-center">Reg No</th>
            <th>&nbsp;&nbsp;&nbsp;&nbsp;Name</th>
            <th>&nbsp;&nbsp;&nbsp;&nbsp;Email</th>
            <th>User Type</th>
            <th>&nbsp;&nbsp;&nbsp;&nbsp;Edit</th>
            <th>Remove</th>
        </tr>

        <?php if (count($records)): ?>

            <?php foreach ($records as $row): ?>

            <tr>
                <td class="text-center"><?php echo $row->id; ?></td>
                <td><?php echo "$row->Fname $row->Lname" ?></td>
                <td><?php echo $row->Email; ?></td>
                <td><?php echo $row->UserType; ?></td>
                <th><a href="<?php echo base_url('Manager/editUser/'.$row->id) ?>"><button type='submit' class='btn btn-warning'>Update</button></th></a>
                <th><a href="<?php echo base_url('Manager/RemoveUser/'.$row->id) ?>"><button type='submit' class='btn btn-danger'>Delete</button></th></a>
            </tr>

            <?php endforeach; ?>

        <?php else: ?>
            <h3 style="margin-bottom: 50px;">No users in the database</h3>
        <?php endif ?>

    </table>
    </div>

</div>
</div>
</div>



<?php include 'partials/footer.php'; ?>
