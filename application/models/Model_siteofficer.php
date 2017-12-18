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

            'Fname' => $this->input->post('fname', TRUE),
            'Lname' => $this->input->post('lname', TRUE),
            'Address' => $this->input->post('address', TRUE),
            'Contact_No' => $this->input->post('cnumber', TRUE),
            'Gender' => $this->input->post('gender', TRUE),
            'Nic' => $this->input->post('nic', TRUE)


        );

        return $this->db->insert('labour', $data);

    }

    function getattendance()
    {

        $this->db->select('*');
        $this->db->from('attendance');
        $this->db->order_by('id');
        $query = $this->db->get();
        return $query->result();

    }

    function getlabour()
    {

        $this->db->select('*');
        $this->db->from('labour');

        $query = $this->db->get();
        return $query->result();

    }

    function insertlabourattendance()
    {
        $nic = $this->input->post('nic', TRUE);
        $date = $this->input->post('date', TRUE);

        $query = $this->db->query("
              SELECT Nic FROM attendance
              WHERE Nic = $nic
              AND date = '$date'; ");


        if (($query->num_rows()) == 1) {
            return 0;

        } else {
            $data = array(


                'attendance' => $this->input->post('attendace', TRUE),
                'Nic' => $this->input->post('nic', TRUE),
                'Date' => $this->input->post('date', TRUE)

            );
            return $this->db->insert('attendance', $data);
        }
    }

    function monthlyprojectreport($post_image)
    {
        $cur_date = date('y-m-d');
        $data = array(

            'project_id' => $this->input->post('attendance', TRUE),
            'content' => $this->input->post('description', TRUE),
            'date' => $this->input->$cur_date,
            'image1' => $post_image,


        );

        return $this->db->insert('report_details', $data);

    }

    function addinventryrequest()
    {
        $cur_date = date('y-m-d');
        $data = array(

            'project_id' => $this->input->post('attendance', TRUE),
            'date' => $this->input->$cur_date,
            'requested_items' => $this->input->post('file1', TRUE),


        );

        return $this->db->insert('inventry_request', $data);

    }
//

}

