<?php

class Model_siteofficer extends CI_Model
{

    function new_month()
    {
        $this->db->query();
    }
    function insertlabourdata()
	{
		$data = array(

			'Fname' => $this->input->post('fname',TRUE), 
			'Lname' => $this->input->post('lname',TRUE),
			'Address' => $this->input->post('address',TRUE),
			'Contact_No' => $this->input->post('contactno',TRUE),
			'UserType' => $this->input->post('user_type',TRUE),
			'Gender' => $this->input->post('gender',TRUE),
			'Email' => $this->input->post('email',TRUE),
			'Password' => sha1($this->input->post('password',TRUE))

		);

		return $this->db->insert('employee',$data);

	}
}
