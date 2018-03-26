<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Indus_we_serve extends CI_Controller {

	public function index()
	{
		$this->load->view('sale/indus_we_serve');
	}

	//sub pages
	public function app()
	{
		$this->load->view('sale/IndusWeServePgs/app');
	}
	public function automobiles()
	{
		$this->load->view('sale/IndusWeServePgs/automobiles');
	}
	public function bank()
	{
		$this->load->view('sale/IndusWeServePgs/bank');
	}
	public function education()
	{
		$this->load->view('sale/IndusWeServePgs/education');
	}
	public function healthcare()
	{
		$this->load->view('sale/IndusWeServePgs/healthcare');
	}
	public function insurance()
	{
		$this->load->view('sale/IndusWeServePgs/insurance');
	}
	public function mutualfund()
	{
		$this->load->view('sale/IndusWeServePgs/mutualfund');
	}
	public function ngo()
	{
		$this->load->view('sale/IndusWeServePgs/ngo');
	}
	public function realestate()
	{
		$this->load->view('sale/IndusWeServePgs/realestate');
	}
	public function retail()
	{
		$this->load->view('sale/IndusWeServePgs/retail');
	}
	public function stock()
	{
		$this->load->view('sale/IndusWeServePgs/stock');
	}
	public function travel()
	{
		$this->load->view('sale/IndusWeServePgs/travel');
	}
	

	

}

/* End of file Aboutus.php */
/* Location: ./application/controllers/Aboutus.php */