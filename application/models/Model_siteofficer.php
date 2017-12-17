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
	function getattendance() {
		
		$this->db->select('*');
		$this->db->from('attendance');
		$this->db->order_by('id');
		$query = $this->db->get();
        return $query->result(); 
        
    }

    function getlabour() {
		
		$this->db->select('*');
		$this->db->from('labour');
		
		$query = $this->db->get();
        return $query->result(); 
        
    }
    function insertlabourattendance()
	{
		$cur_date=date('y-m-d');
		$data = array(


			'Attendance' => $this->input->post('attendance',TRUE),
			'Date' => $this->input->$cur_date,
			'Nic'=>$this->input->post('nic',TRUE)


		);

		return $this->db->insert('attendance',$data);

	}
}
