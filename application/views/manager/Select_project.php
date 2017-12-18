<?php 
	if ($this->session->userdata('loggedin')) {
    	include 'loggedin/header.php';
    }
    else{
       include 'partials/header.php';
    }

?>


<div class="container" style="min-height: 500px;">

<br><br>

<div class="row">
        <!-- Sidebar Column -->
        <div class="col-lg-3 mb-4">
          <div class="list-group text-center" >
            <a href="<?php echo base_url('Manager/Home'); ?>" class="list-group-item">Profile</a>
            <a href="<?php echo base_url('Manager/RegisterUser'); ?>" class="list-group-item">Register New User</a>
            <a href="<?php echo base_url('Manager/viewUsers'); ?>" class="list-group-item">Manage User</a>
            <a href="<?php echo base_url('Manager/New_project'); ?>" class="list-group-item">New Project</a>
            <a href="<?php echo base_url('Manager/viewProjects'); ?>" class="list-group-item">Project Details</a>
            <a href="<?php echo base_url('Manager/viewMessages'); ?>" class="list-group-item">User Masseges</a>
            <a href="<?php echo base_url('Manager/viewProjects2'); ?>" class="list-group-item active">View Reports</a>
          </div>
        </div>

        <div class="col-lg-6 mb-4">
            <h1>Select the Project</h1><br>
            <h3>Select the Project to view Reports</h3><br>

            <center><h4>Projects</h4></center>

                <div class="table-responsive table-striped">
                    <table class="table">
                        <tr>
                            <th class="text-center">Project ID</th>
                            <th class="text-center">Title</th>
                            
                        </tr>

                        <?php if (count($records)): ?>

                            <?php foreach ($records as $row): ?>

                            <tr>
                                
                                <td class="text-center"><?php echo $row->id; ?></td>
                                <td class="text-center"><a href="<?php echo base_url('Manager/viewReports/'.$row->id); ?>"><?php echo $row->Title; ?></a></td>
                                
                            </tr>

                            <?php endforeach; ?>

                        <?php else: ?>
                            <h3 style="margin-bottom: 50px;">No projects in the database</h3>
                        <?php endif ?>

                    </table>
                    </div>
        </div>
</div>
</div>

<?php include 'partials/footer.php'; ?>



