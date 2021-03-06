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

    public function view_attendance()
    {

        $this->load->model('Model_accountant');
        $data['records'] = $this->Model_accountant->view_attendance();
        $this->load->view('accountant/acc_attendance',$data);

    }

    public function view_project()
    {
        $this->load->model('Model_accountant');
        $records = $this->Model_accountant->view_project();
        $this->load->view('accountant/acc_projectdet', ['records' => $records]);
    }

    public function view_yard()
    {
        $this->load->model('Model_accountant');
        $data['records'] = $this->Model_accountant->view_yard();
        $this->load->view('accountant/acc_yard',$data);
    }

    public function searchyard()
    {
        $search = $this->input->post('search');
        $this->load->model('Model_accountant');
        $data['records'] = $this->Model_accountant->searchyard($search);
        $this->load->view('Accountant/acc_yard', $data);

    }
    public function add_yard_item()
    {

        $this->form_validation->set_rules('item_name', 'Item Name', 'required');
        $this->form_validation->set_rules('unit_price', 'Unit Price', 'required|numeric');
        $this->form_validation->set_rules('measure_unit', 'Measuring Unit', 'required');
        $this->form_validation->set_rules('item_quntity', 'Quantity', 'numeric');
        $this->form_validation->set_rules('item_des', 'Item Description');
        if ($this->form_validation->run() == FALSE){

            $this->load->view('accountant/acc_yard_item');
        }
        else{

            $this->load->model('Model_accountant');
            $response = $this->Model_accountant->add_yard_item();

            if ($response){

                $this->session->set_flashdata('msg','Yard Item added succsesfully');
                redirect('Accountant/add_yard_item');
            }

            else{
                $this->session->set_flashdata('msg','Something went wrong!!!');
                redirect('Accountant/add_yard_item');
            }

        }
    }

    public function searchlabours() {
        $search = $this->input->post('search');
        $this->load->model('Model_accountant');
        $data['records'] = $this->Model_accountant->searchlab($search);
        $this->load->view('Accountant/acc_attendance', $data);

    }
}