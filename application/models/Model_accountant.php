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
}