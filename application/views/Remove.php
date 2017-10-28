<?php 
	if ($this->session->userdata('loggedin')) {
	    include 'loggedin/header.php';
	}
	else{
	    include 'partials/header.php';
	}
?>

<div class="container" style="min-height: 402px;">

<h1 class="mt-4 mb-3"></h1>

<div class="row">
        <!-- Sidebar Column -->
        <div class="col-lg-3 mb-4">
          <div class="list-group text-center" >
            <a href="<?php echo base_url('Manager/Home'); ?>" class="list-group-item">Profile</a>
            <a href="<?php echo base_url('Register/RegisterUser'); ?>" class="list-group-item active">Register New User</a>
            <a href="<?php echo base_url('Remove/viewUsers'); ?>" class="list-group-item">Remove User</a>
            <a href="services.html" class="list-group-item">Project Details</a>
            <a href="contact.html" class="list-group-item">User comments/masseges</a>
            <a href="contact.html" class="list-group-item">View Progress</a>
            <a href="contact.html" class="list-group-item">View Reports</a>
            <a href="contact.html" class="list-group-item">Add Special Announcements</a>
          </div>
        </div>

<div class="col-lg-9 mb-4">

<h1 >Stored users in Databse</h1>
	
	<hr>

    <table class="table table-striped">

        <tr>
            <th>Reg No</th>
            <th>Name</th>
            <th>University</th>
            <th>Edit</th>
            <th>Remove</th>
        </tr>

        <?php if (count($records)): ?>

            <?php foreach ($records as $row): ?>

            <tr>
                <td><?php echo $row->id; ?></td>
                <td><?php echo $row->Fname; ?></td>
                <td><?php echo $row->Email; ?></td>
                <th><a href="<?php echo base_url(''.$row->id) ?>"><button type='submit' class='btn btn-warning'>Update</button></th></a>
                <th><a href="<?php echo base_url('Remove/RemoveUser/'.$row->id) ?>"><button type='submit' class='btn btn-danger'>Delete</button></th></a>
            </tr>

            <?php endforeach; ?>

        <?php else: ?>
            <p style="margin-bottom: 50px;">No users in the database</p>
        <?php endif ?>

    </table>

</div>
</div>
</div>



<?php include 'partials/footer.php'; ?>
