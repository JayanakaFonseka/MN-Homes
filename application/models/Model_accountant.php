<?php
class Model_accountant extends CI_Model
{
    function add_labour_det()
    {
        $data = array(
            'Fname' => $this->input->post('fname', TRUE),
            'Lname' => $this->input->post('lname', TRUE),
            'Address' => $this->input->post('address', TRUE),
            'Contact_No' => $this->input->post('contactno', TRUE),
            'Gender' => $this->input->post('gender', TRUE),
            'Nic' => $this->input->post('nic', TRUE)
        );

        return $this->db->insert('labour', $data);

    }

    function view_attendance()
    {
        $this->db->select('*');
        $this->db->from('attendance');
        $this->db->join('labour', 'labour.Nic = attendance.labour_id');
        $query = $this->db->get();
        return $query->result();
    }

    function view_project()
    {
        $this->db->select('*');
        $this->db->from('projects');
        $this->db->order_by('id');
        $query = $this->db->get();
        return $query->result();
    }
}