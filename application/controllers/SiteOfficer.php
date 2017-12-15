<?php

/**
* 
*/
class SiteOfficer extends CI_Controller
{
	
	public function Home()
	{
		$this->load->view('SiteOfficer');
	}
    public function labour_att()
    {
        $this->load->view('labour_att');
    }
    public function new_month()
    {
        $this->load->model('siteofficer_model');
        $response = $this->siteofficer_model->new_month();
    }
}