    <?php if ($this->session->userdata('loggedin')) {
      include 'loggedin/header.php';
    }
    else{
       include 'partials/header.php';
    }

    ?>


<div class="container">

	<h1>Jayyz Home Page</h1>
	<hr>

</div>

<?php include 'partials/footer.php'; ?>
