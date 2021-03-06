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

    function searchlab($search)
    {
        $this->db->select('*');
        $this->db->from('labour', 'attendance');
        $this->db->join('labour', 'labour.Nic = attendance.Nic');
        $this->db->like('Fname', $search);
        $this->db->or_like('Lname', $search);
        $this->db->or_like('Address', $search);
        $this->db->or_like('Contact_No', $search);
        $this->db->or_like('Gender', $search);
        $this->db->or_like('Nic', $search);

        $query = $this->db->get();
        return $query->result();
    }

    function view_attendance()
    {
        $this->db->select('*');
        $this->db->from('attendance');
        $this->db->join('labour', 'labour.Nic = attendance.Nic');
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

    function add_yard_item()
    {
        $data = array(

        'item_name' => $this->input->post('item_name', TRUE),
        'unit_price' => $this->input->post('unit_price', TRUE),
        'measure_unit' => $this->input->post('measure_unit', TRUE),
        'item_quantity' => $this->input->post('item_quntity', TRUE),
        'item_des' => $this->input->post('item_des', TRUE)
        );

        return $this->db->insert('yard', $data);
    }

    function view_yard()
    {
        $this->db->select('*');
        $this->db->from('yard');
        $this->db->order_by('item_id');
        $query = $this->db->get();
        return $query->result();
    }

    function searchyard($search)
    {
        $this->db->select('*');
        $this->db->from('yard');
        $this->db->like('item_name', $search);
        $this->db->or_like('unit_price', $search);
        $this->db->or_like('measure_unit', $search);
        $this->db->or_like('item_quantity', $search);
        $this->db->or_like('item_des', $search);

        $query = $this->db->get();
        return $query->result();
    }

}