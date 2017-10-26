<?php include 'Includes/header.php';


	if ($this->session->flashdata('welcome')) {
		echo "<h3>".$this->session->flashdata('welcome')."</h3>";
	} 
?> 

<?php include 'Includes/footer.php'; ?>
