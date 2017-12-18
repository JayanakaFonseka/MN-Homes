<?php

/**
* 
*/
class SiteOfficer extends CI_Controller
{
	
	public function Home()
	{
		$this->load->view('siteofficer/SiteOfficer');
	}
    public function markattendance()
    {
        $this->load->model('Model_siteofficer');
        $data['records'] = $this->Model_siteofficer->getlabour(); 
        $this->load->view('siteofficer/Markattendance',$data);
    }
    public function viewattendance()
    {
        $this->load->model('Model_siteofficer');
        $data['records'] = $this->Model_siteofficer->getattendance();
        $this->load->view('siteofficer/viewattendance',$data);
    }

    public function new_month()
    {
        $this->load->model('siteofficer_model');
    }

    public function monthlyprojectreport()
    
    {
        $this->load->model('Model_siteofficer');
        $response = $this->Model_siteofficer->monthlyprojectreport();
        $this->load->view('siteofficer/monthlyprojectreport');
    }

    public function inventryrequest()
    {
        $this->load->view('siteofficer/inventryrequest');
    }

    public function addlabour()
    {
        $this->load->view('siteofficer/add');
    }
public function addlabour_det()
    {    
        $this->form_validation->set_rules('fname', 'Fname', 'required');
        $this->form_validation->set_rules('lname', 'Lname', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');

        $this->form_validation->set_rules('cnumber', 'Contact_No', 'required|max_length[11]');

        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('nic', 'Nic', 'required');


        #If tha validations fails --> view again addlabour page
        if ($this->form_validation->run() == FALSE){

            $this->load->view('siteofficer/add');
        }

        #If tha validations passes --> load the model 'Model_manager[insertUserdata function]'
        else{

          $this->load->model('Model_siteofficer');
            $response = $this->Model_siteofficer->insertlabourdata(); 

            if ($response){

                $this->session->set_flashdata('msg','Labour Registered Successfully.');
                redirect('siteofficer/addlabour');
            }

            else{
                $this->session->set_flashdata('msg','Something went wrong!!!');
                redirect('siteofficer/addlabour');
            } 
        }
    }
    public function insertattendance()
    {

        $this->load->model('Model_siteofficer');
        $response = $this->Model_siteofficer->insertlabourattendance();

        if ($response){

            $this->session->set_flashdata('msg','Attendance added Successfully.');
            redirect('siteofficer/Markattendance');
      }

        else{
            $this->session->set_flashdata('msg','Attendance marked for the date!!!');
            redirect('siteofficer/Markattendance');
        }
    }
    public function insertinventryrequest()
    {
        
        $this->load->model('Model_siteofficer');
        $data['records'] = $this->Model_siteofficer->addinventryrequest(); 
        $this->load->view('siteofficer/inventryrequest',$data);

    }

            
}            

?>

