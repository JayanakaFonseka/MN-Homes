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


}
