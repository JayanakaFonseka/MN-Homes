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

	function monthlyprojectreport()
	{
		$cur_date=date('y-m-d');

		$config['upload_path'] = './uploads';
		$config['allowed_types'] = '*';
		$this->load->library('upload',$config);
		$this->upload->do_upload('file_name');
		$file_name = $this->upload->data();

		$data = array(

			'project_id' => $this->input->post('projectid',TRUE),
			'content' => $this->input->post('description',TRUE),
			'date' => $cur_date,
			'image1'=> $file_name['file_name']
		);

		return $this->db->insert('report_details',$data);

	}
	function addinventryrequest()
	{
		$cur_date=date('y-m-d');
		$data = array(

			'project_id' => $this->input->post('attendance',TRUE),
			'date' => $this->input->$cur_date,
			'requested_items'=>$this->input->post('file1',TRUE),


		);

		return $this->db->insert('inventry_request',$data);

	}

}
