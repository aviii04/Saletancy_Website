<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LeadGener extends CI_Controller {

	public function index()
	{
		$this->load->view('sale/lead_generation');
	}

	public function send_message()
	{
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');
        $this->form_validation->set_rules('fname', 'First Name', 'required|alpha|min_length[3]');
        $this->form_validation->set_rules('lname', 'Last Name', 'required|alpha|min_length[3]');

		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('company', 'Company', 'required|alpha');
		$this->form_validation->set_rules('title', 'Title', 'required|alpha');
		$this->form_validation->set_rules('phone', 'Phone No.', 'required|min_length[10]|numeric|max_length[10]');
		
		if ($this->form_validation->run() == FALSE)
		{
				$this->load->view('sale/lead_generation');
		}
		else
		{
				$this->load->view('sale/formSuccess');
		}
	}
}

/* End of file Aboutus.php */
/* Location: ./application/controllers/Aboutus.php */