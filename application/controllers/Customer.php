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

	public function viewProjects()
	{
		$this->load->model('Model_customer');
		$records = $this->Model_customer->getProjects();
		$this->load->view('customer/Projects', ['records' => $records]);
	}

}
