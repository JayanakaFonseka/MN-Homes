<?php

class Model_customer extends CI_Model
{

  function getProjects() {

    $this->db->select('*');
    $this->db->from('projects');
    $this->db->order_by('id');
    $query = $this->db->get();
    return $query->result();
  }


}
