<?php

/**
* 
*/
class Manager extends CI_Controller
{
	
	public function Home()
	{
		$this->load->view('Manager');
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

			$this->load->view('Register');
       	}

       	#If tha validations passes --> load the model 'Model_user[insertUserdata function]'
        else{

          $this->load->model('Model_user');
         	$response = $this->Model_user->insertUserdata(); 

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
		$this->load->model('Model_user');
		$records = $this->Model_user->getProjects();
		$this->load->view('Projects', ['records' => $records]);
		
	}


	public function RemoveUser($user_id) {

  		$this->load->model('Model_user');
  		$this->Model_user->RemoveUser($user_id);
  		redirect('ManageUsers/viewUsers');
       
	}
	
	public function viewUsers() {
		$this->load->model('Model_user');
		$data['records'] = $this->Model_user->getUsers();
		$this->load->view('ManageUsers', $data);
		
	}

	public function editUser($stu_id) {

		$this->load->model('Model_user');

		if (isset($_POST['update'])) {
			if ($this->Model_user->update($stu_id)) {
				$this->session->set_flashdata('success','Student is updated');
				redirect('ManageUsers/viewUsers/');	
			} else {
				$this->session->set_flashdata('error','Student is not updated');
				redirect('ManageUsers/viewUsers/');
			}
		}

		$data['row'] = $this->Model_user->edit($stu_id);
		$this->load->view('Update',$data);
		
	}

	public function searchUsers() {
		$searchkey = $this->input->post('search');
		$this->load->model('Model_user');
		$data['records'] = $this->Model_user->Search($searchkey);
		$this->load->view('ManageUsers', $data);
		
	}


}