<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactus extends CI_Controller {

	public function index()
	{
		$this->load->view('sale/contactus');
	}

	public function send_message()
	{
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Username', 'required|alpha|min_length[3]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('website', 'Company Name', 'required|alpha');
		$this->form_validation->set_rules('message', 'Message', 'required');
		$this->form_validation->set_rules('phone', 'Phone No.', 'required|min_length[8]|numeric|max_length[10]');
	
	
		
		if ($this->form_validation->run() == FALSE)
		{
				$this->load->view('sale/contactus');
		}
		else
		{
				$this->load->view('sale/formSuccess');
		}
	
	}

}

/* End of file Contactus.php */
/* Location: ./application/controllers/Contactus.php */