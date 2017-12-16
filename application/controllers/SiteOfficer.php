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
        $this->load->view('siteofficer/Markattendance');
    }
    public function new_month()
    {
        $this->load->model('siteofficer_model');
    }
    public function projectprogress()
    {
        $this->load->view('siteofficer/projectprogress');
    }
    public function inventryrequest()
    {
        $this->load->view('siteofficer/inventryrequest');
    }
    public function monthlyprojectreport()
    {
        $this->load->view('siteofficer/monthlyprojectreport');
    }
    public function addlabour()
    {
        $this->load->view('siteofficer/add');
    }
}
