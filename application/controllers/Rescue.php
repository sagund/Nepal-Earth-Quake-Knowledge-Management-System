<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );


class Rescue extends MY_Controller {
	public function __construct() {
		parent::__construct ();
		$this->load->helper ('url','form' );
		$this->load->model('rescue_model');
		$this->load->library('form_validation','session');

	}
	public function index() {
		
		if ($_POST) {
		$this->form_validation->set_rules('situation_descp', 'Situation Description', 'trim|xss_clean');
		$this->form_validation->set_rules('victim_name', 'Victim Name', 'trim|xss_clean');
		$this->form_validation->set_rules('phone', 'Phone Number', 'trim|xss_clean|numeric');
		$this->form_validation->set_rules('address', 'Address', 'trim|xss_clean');
		$this->form_validation->set_rules('tole', 'Tole', 'trim|xss_clean');
		$this->form_validation->set_rules('street', 'Street', 'trim|xss_clean');
		$this->form_validation->set_rules('city_vdc', 'City / VDC', 'trim|xss_clean');
		$this->form_validation->set_rules('region', 'Region', 'trim|xss_clean');
		$this->form_validation->set_rules('zip', 'Zip Code', 'trim|xss_clean|numeric');
		$this->form_validation->set_rules('country', 'Country', 'trim|xss_clean');

			$data ['victim_injury'] = $this->input->post('victim_injury');
			$data ['trap'] = $this->input->post('trap');
			$data ['situation_descp'] = $this->input->post('situation_descp');
			$data ['victim_name'] = $this->input->post('victim_name');
			$data ['phone'] = $this->input->post('phone');
			$data ['loc_method'] = $this->input->post('loc_method');
			$data ['address'] = $this->input->post('address');
			$data ['tole'] = $this->input->post('tole');
			$data ['street'] = $this->input->post('street');
			$data ['city_vdc'] = $this->input->post('city_vdc');
			$data ['region'] = $this->input->post('region');
			$data ['zip'] = $this->input->post('zip');
			$data ['country'] = $this->input->post('country');
			$data ['lat'] = $this->input->post('lat');
			$data ['lon'] = $this->input->post('lon');
			$data ['user_alt'] = $this->input->post('user_alt');
			$data ['pos_acc'] = $this->input->post('pos_acc');
			$data ['alt_acc'] = $this->input->post('alt_acc');

			$victimcondition=array();
			if($this->input->post('victim_condition')){
			foreach ($this->input->post('victim_condition') as $victim_condition)
			{  				
				$victimcondition[] = $victim_condition;
			}
			$victim_condition1=implode(',',$victimcondition);
			$data ['victim_condition'] = $victim_condition1;
		}

			$hazards_=array();
			if($this->input->post('hazards')){
			foreach ($this->input->post('hazards') as $hazards)
			{  				
				$hazards_[] = $hazards;
			}
			$hazards1=implode(',',$hazards_);
			$data ['hazards'] = $hazards1;
		}
			if ($this->form_validation->run() == FALSE)
			{
				
				$this->session->set_flashdata('msg','<div class="help-block alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Data submission failed</div>');
				redirect(base_url().'rescue');
				return ;
			}
			else{
				$insert=$this->rescue_model->insertRescue($data);
			}

			if($insert!=0){
				$this->session->set_flashdata('msg','<div class="help-block alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Data successfully submitted.</div>');
				redirect(base_url().'rescue');
				return;
			}else{
				$this->session->set_flashdata('msg','<div class="help-block alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Data submission failed</div>');
				redirect(base_url().'rescue');
				return ;
			}
		}
		else{
			$this->load->view('victim_rescue');
		}
	}

}