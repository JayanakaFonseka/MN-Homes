    <?php if ($this->session->userdata('loggedin')) {
      include 'loggedin/header.php';
    }
    else{
       include 'partials/header.php';
    }

    ?>

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
-->

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
            <a href="<?php echo base_url('SiteOfficer/Home'); ?>" class="list-group-item ">Profile</a>
            <a href="<?php echo base_url('SiteOfficer/Markattendance'); ?>" class="list-group-item active">Mark Attendence</a>
            <a href="<?php echo base_url('SiteOfficer/projectprogress'); ?>" class="list-group-item">Monthly Project Report</a>
            <a href="<?php echo base_url('SiteOfficer/inventryrequest'); ?>" class="list-group-item">Inventry Requests</a>


          </div>
        </div>
        <!-- Content Column -->
      <div class="col-lg-9 mb-4">
        <div class="welltextcenter">
          <h2>
           Labour Attendance Management
          </h2>
        </div>
        <div class="panel panel default">
          <div class="panelheading">
            <h2>            
              <a href="<?php echo base_url('SiteOfficer/viewattendance'); ?>" class="btn btn-success pull-right">view all</a>
              <a href="<?php echo base_url('SiteOfficer/addlabour'); ?>" class="btn btn-primary ">Add labour</a>
            </h2>

          </div>
          <div class="panel-body">

            <?php echo form_open('SiteOfficer/insertattendance'); ?>
            <form action="" method="post">
              <table class="table table-striped">

                <tr>
                <th width="25%">Labour Id</th>
                
                <th width="25%">Attendance</th>
                <th width="25%">Date</th>
                <th width="25%">Do</th>
                </tr>
            <div class="well text-center" style="font-size: 20px">
              <strong>DATE: <?php $cur_date=date('y-m-d'); echo $cur_date; ?></strong>
            </div>
               <?php if (count($records)): ?>
                <?php foreach ($records as $row): ?>
            <tr>
                
                <td class="text-center" >
                  <input type="hidden" name="nic" value=<?php echo $row->Nic; ?>>
                 <?php echo $row->Nic; ?></td>
                <td>
                    <input type="radio" name="attendace" value="present"> Present<br>
                    <input type="radio" name="attendace" value="absent">Absent<br>
                </td>
                <td>
                   <?php echo $cur_date; ?> 
                </td>

                <td><button type="button" class='btn btn-warning insertbtn'><a href="<?=base_url()?>Siteofficer/insertattendance">Add</a></button>
                </td>

            </tr>

            <?php endforeach; ?>
        <?php else: ?>
            <h3 style="margin-bottom: 50px;">No users in the database</h3>
        <?php endif ?> 

            </table>
            </form>
            <?php echo form_close(); ?>
          </div>
        </div>
      </div>
      <!-- /.row -->
    </div>
  </div>

</div>
 <!-- /.container -->

<?php include 'loggedin/footer.php'; ?>
<script type="text/javascript">
  $('.insertbtn').click(function(){
   // alert("fg");
    //$(this).prop('disabled',true);
    $(this).hide();
  });

</script>