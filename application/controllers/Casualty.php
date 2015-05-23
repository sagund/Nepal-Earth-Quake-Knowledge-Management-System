<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Casualty extends CI_Controller {

	function __construct(){
		parent::__construct();
		
		
		$this->load->model('base_model');
		$this->load->model('volunteer_model');
	}

	public function index(){
		$data['districts'] = $this->volunteer_model->getDistrictList();
		$this->load->view('header');
        $this->load->view('casualty/view',$data);
        $this->load->view('footer');
	}
	
	public function report(){
		$data['districts'] = $this->volunteer_model->getDistrictList();
		$this->load->view('header');
        $this->load->view('casualty/report',$data);
        $this->load->view('footer');
	}

	

}
