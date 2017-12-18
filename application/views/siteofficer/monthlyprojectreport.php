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
      <h1 style="text-align: center;">Monthly Report</h1>



      <!-- Content Row -->
      <div class="row">
        <!-- Sidebar Column -->
        <div class="col-lg-3 mb-4">
          <div class="list-group text-center" >
            <a href="<?php echo base_url('SiteOfficer/Home'); ?>" class="list-group-item  ">Profile</a>
            <a href="<?php echo base_url('SiteOfficer/Markattendance'); ?>" class="list-group-item">Mark Attendence</a>
            <a href="<?php echo base_url('SiteOfficer/monthlyprojectreport'); ?>" class="list-group-item active">Monthly Project Report</a>
            <a href="<?php echo base_url('SiteOfficer/inventryrequest'); ?>" class="list-group-item">Inventry Requests</a>


          </div>
        </div>
        <!-- Content Column -->
        <div class="col-lg-9 mb-4">



      <?php if ($this->session->flashdata('msg')) {
        echo "<h3>".$this->session->flashdata('msg')."</h3>";
      }
      ?>

      

      
      <?php echo validation_errors(); ?>
      <?php echo form_open_multipart('SiteOfficer/insertmonthlyprojectreport'); ?>

    <div class="row">
      
      <div class="col-lg-9 dashed" style="border: dashed;">
        <div class="form-group">
          <label for="exampleInputEmail1">Project Id</label>
          <input type="text" class="form-control" id="exampleInput" placeholder="project id" name="projectid">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Description About the current status</label>
          <textarea rows="4" cols="50" type="text" class="form-control" id="exampleInputEmail1" placeholder="current status" name="description"></textarea> 
        </div>

        </div>
        
        <div class="col-lg-9 dashed" style="border: dashed;">

        <div class="form-group">
          <label for="exampleInputEmail1">Image 1</label>
          <input type="file" class="form-control-file" id="exampleInputFile" name="file1" aria-describedby="fileHelp">
        
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Image 2</label>
          <input type="file" class="form-control-file" id="exampleInputFile" name="file2" aria-describedby="fileHelp">
        
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Image 3</label>
          <input type="file" class="form-control-file" id="exampleInputFile" name="file3" aria-describedby="fileHelp">
        
        </div>









              </div>
        </div>

      <hr>

      <button type="submit" class="btn btn-success">Submit</button>

      <?php echo form_close(); ?>
    
  </div>
</div>
</div>
<?php include 'partials/footer.php'; ?>
