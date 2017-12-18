<?php

class Model_customer extends CI_Model
{

  function getProjects($user_id) {

    $this->db->select('*');
    $this->db->from('projects');
    $this->db->order_by('id');
    $this->db->where('customer_id', $user_id);
    $query = $this->db->get();
    return $query->result();
  }

  function getSelectedProject($id) {

    $this->db->select('*');
    $this->db->from('projects');
    $this->db->order_by('id');
    $this->db->where('id', $id);
    $query = $this->db->get();
    return $query->result();
  }


  	public function Message(){

  		$data = array(

  		'full_name' => $this->input->post('fullname', TRUE),
  		'tele_number' => $this->input->post('telenumber', TRUE),
  		'email' => $this->input->post('email',TRUE),
  		'message' => $this->input->post('message',TRUE) );

  		$this->db->insert('messages',$data);
  	}


    function viewReports($id) {
        
      $this->db->select('*');
      $this->db->from('report_details as rep','projects as pjts');
      $this->db->where('emp.id', $id);
      $this->db->join('projects as pjts', 'rep.project_id = pjts.id');
      $this->db->join('employee as emp', 'pjts.customer_id = emp.id');
      $this->db->order_by('rport_id', 'DESC');
      $query = $this->db->get();
      return $query->result(); 
        
    }

}
