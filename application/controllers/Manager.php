<?php

/**
* 
*/
class Manager extends CI_Controller
{
	
	public function Home()
	{
		$this->load->view('manager/Manager');
	}

	public function RegisterUser()
	{
		$this->form_validation->set_rules('fname', 'First Name', 'required');
		$this->form_validation->set_rules('lname', 'Last Name', 'required');
	    $this->form_validation->set_rules('address', 'Address', 'required');
	    $this->form_validation->set_rules('contactno', 'Contact Number', 'required|max_length[11]');
	    $this->form_validation->set_rules('user_type', 'User Type', 'required');
	    $this->form_validation->set_rules('gender', 'Gender', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[employee.email]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
		$this->form_validation->set_rules('confirmpassword', 'Confirm Password', 'required|matches[password]');

		#If tha validations fails --> view again registration page
		if ($this->form_validation->run() == FALSE){

			$this->load->view('manager/Register');
       	}

       	#If tha validations passes --> load the model 'Model_manager[insertUserdata function]'
        else{

          $this->load->model('Model_manager');
         	$response = $this->Model_manager->insertUserdata(); 

          	if ($response){

             	$this->session->set_flashdata('msg','Registered Successfully..please Login');
            	redirect('Home/Login');
         	}

       		else{
             	$this->session->set_flashdata('msg','Something went wrong!!!');
              	redirect('Home/Register');
         	}

      }
	}

	public function viewProjects() {
		$this->load->model('Model_manager');
		$records = $this->Model_manager->getProjects();
		$this->load->view('manager/Projects', ['records' => $records]);
		
	}


	public function RemoveUser($user_id) {

  		$this->load->model('Model_manager');
  		$this->Model_manager->RemoveUser($user_id);
  		redirect('ManageUsers/viewUsers');
       
	}
	
	public function viewUsers() {
		$this->load->model('Model_manager');
		$data['records'] = $this->Model_manager->getUsers();
		$this->load->view('manager/ManageUsers', $data);
		
	}

	public function editUser($stu_id) {

		$this->load->model('Model_manager');

		if (isset($_POST['update'])) {
			if ($this->Model_manager->update($stu_id)) {
				$this->session->set_flashdata('success','Student is updated');
				redirect('ManageUsers/viewUsers/');	
			} else {
				$this->session->set_flashdata('error','Student is not updated');
				redirect('ManageUsers/viewUsers/');
			}
		}

		$data['row'] = $this->Model_manager->edit($stu_id);
		$this->load->view('manager/Update',$data);
		
	}

	public function searchUsers() {
		$searchkey = $this->input->post('search');
		$this->load->model('Model_manager');
		$data['records'] = $this->Model_manager->Search($searchkey);
		$this->load->view('manager/ManageUsers', $data);
		
	}


}