<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Volunteer extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('volunteer_model');
	}
 
	public function index()
	{
		$data['districts'] = $this->volunteer_model->getDistrictList();
		$this->load->view('header');
		
		
        $this->load->view('volunteer/list',$data);
        $this->load->view('footer');
	}

	
	public function register(){
		$this->load->view('header');
		$data['districts'] = $this->volunteer_model->getDistrictList();
		$this->load->view('volunteer/register',$data);
		$this->load->view('footer');
	}
	
	public function home(){
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}
}
