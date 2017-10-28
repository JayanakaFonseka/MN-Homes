<?php

/**
* 
*/
class Remove extends CI_Controller
{
	

	function RemoveUser($user_id) {

  		$this->load->model('Model_user');
  		$this->Model_user->RemoveUser($user_id);
  		redirect('Remove/viewUsers');
       
	}

	public function view() {
		
		$this->load->view('users_view');
		
	}
	
	public function viewUsers() {
		$this->load->model('Model_user');
		$records = $this->Model_user->getUsers();
		$this->load->view('Remove', ['records' => $records]);
		
	}

}