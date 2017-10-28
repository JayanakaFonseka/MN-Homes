<?php

/**
* 
*/
class Projects extends CI_Controller
{
	
	function Home()
	{
		$this->load->view('Projects');
	}

	function viewProjects() {
		$this->load->model('Model_user');
		$records = $this->Model_user->getProjects();
		$this->load->view('Projects', ['records' => $records]);
		
	}
}