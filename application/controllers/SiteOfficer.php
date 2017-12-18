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
        //$this->load->model('Model_siteofficer');
        //$response = $this->Model_siteofficer->monthlyprojectreport();
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
        $data['records'] = $this->Model_siteofficer->insertlabourattendance(); 
        $this->load->view('siteofficer/Markattendance',$data);

    }
    public function insertinventryrequest()
    {
        
        $this->load->model('Model_siteofficer');
        $data['records'] = $this->Model_siteofficer->addinventryrequest(); 
        $this->load->view('siteofficer/inventryrequest',$data);

    }

    public function insertmonthlyprojectreport(){

            $this->load->model('Model_siteofficer');
            
            //image
            $config['upload_path'] = './assets/images/uploads';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '2048';
            $config['max_width'] = '2000'; //max resolution width
            $config['max_height'] = '2000';  //max resolution height

            $this->load->library('upload', $config);

            if(!$this->upload->do_upload('userfile')){
                $errors = array('error' => $this->upload->display_errors());
                $post_image = 'no_image.png';
                
            }
            else{
                $data = array('upload_data' => $this->upload->data());
                $post_image = $_FILES['userfile']['name'];  //name must be userfile
                
            }

            $this->Model_siteofficer->monthlyprojectreport($post_image);
            //$this->session->set_flashdata('success','Post published');
            redirect('SiteOfficer/monthlyprojectreport/');
    }

            
}            

?>

