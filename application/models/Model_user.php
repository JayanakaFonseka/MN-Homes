<?php

/**
* 
*/
class Model_user extends CI_Model
{
	
	function insertUserdata()
	{
		$data = array(

			'Fname' => $this->input->post('fname',TRUE), 
			'Lname' => $this->input->post('lname',TRUE),
			'Address' => $this->input->post('address',TRUE),
			'Contact_No' => $this->input->post('contactno',TRUE),
			'UserType' => $this->input->post('user_type',TRUE),
			'Gender' => $this->input->post('gender',TRUE),
			'email' => $this->input->post('email',TRUE),
			'password' => sha1($this->input->post('password',TRUE))

		);

		return $this->db->insert('employee',$data);

	}

	function LoginUser(){

		$email = $this->input->post('email');
		$password = sha1($this->input->post('password'));

		$this->db->where('email',$email);
		$this->db->where('password',$password);

		$respond = $this->db->get('employee');

		if ($respond->num_rows()==1) {
				return $respond->row(0);
			}

		else{

			return FALSE;

		}

	}

	function RemoveUser($user_id) {

        $this->db->where('id',$user_id);
        $this->db->delete('employee');
    }

   	function getUsers() {
		
		$this->db->select('*');
		$this->db->from('employee');
		$this->db->order_by('id');
		$query = $this->db->get();
        return $query->result(); 
        
    }

}