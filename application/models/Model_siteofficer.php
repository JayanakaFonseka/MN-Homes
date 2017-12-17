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
			'Contact_No' => $this->input->post('cnumber',TRUE),
			'Gender' => $this->input->post('gender',TRUE),
			'Nic'=>$this->input->post('nic',TRUE)


		);

		return $this->db->insert('labour',$data);

	}
}
