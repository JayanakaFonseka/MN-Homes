<?php

/**
*
*/
class Customer extends CI_Controller
{

	public function Home()
	{
		$this->load->view('customer/Customer');
	}

	public function ViewProjects()
	{
		$this->load->model('Model_customer');
		$records = $this->Model_customer->getProjects($_SESSION['user_id']);
		$this->load->view('customer/Projects', ['records' => $records]);
	}

	public function ViewSelectedProject($id)
	{
		$this->load->model('Model_customer');
		$records = $this->Model_customer->getSelectedProject($id);
		$this->load->view('customer/ReadMoreProject', ['records' => $records]);
	}

}
