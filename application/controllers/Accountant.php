<?php

/**
* 
*/
class Accountant extends CI_Controller
{
	
	public function Home()
	{
		$this->load->view('accountant/Accountant');
	}
    public function add_labour()
    {
        $this->load->view('accountant/acc_addlabour');
	}

    public function add_labour_det()
    {
        {
            $this->form_validation->set_rules('fname', 'First Name', 'required');
            $this->form_validation->set_rules('lname', 'Last Name', 'required');
            $this->form_validation->set_rules('address', 'Address', 'required');
            $this->form_validation->set_rules('contactno', 'Contact Number', 'numeric|required|min_length[10]');
            $this->form_validation->set_rules('gender', 'Gender', 'required');
            $this->form_validation->set_rules('nic', 'NIC', 'numeric|required|min_length[9]');

            #If tha validations fails --> view again registration page
            if ($this->form_validation->run() == FALSE){

                $this->load->view('accountant/acc_addlabour');
            }

            #If tha validations passes --> load the model account model [add labour function]'
            else{

                $this->load->model('Model_accountant');
                $response = $this->Model_accountant->add_labour_det();

                if ($response){

                    $this->session->set_flashdata('msg','Labour added succsesfully');
                    redirect('Accountant/add_labour');
                }

                else{
                    $this->session->set_flashdata('msg','Something went wrong!!!');
                    redirect('Accountant/add_labour');
                }

            }
        }
    }
}