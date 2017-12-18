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

	public function SendMessage()
	{
		$this->load->view('customer/SendMessage');
	}


	function Message(){

		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');

		if ($this->form_validation->run() == FALSE){

			$this->load->view('customer/SendMessage');
       	}

        else{

          	$this->load->model('Model_customer');
          	$this->Model_customer->Message();
          	redirect('Customer/Message');

        }
	}

	function viewReports($id){

		$this->load->model('Model_customer');
        $data['records'] = $this->Model_customer->viewReports($id);
		$this->load->view('customer/View_reports',$data);
	}



}
