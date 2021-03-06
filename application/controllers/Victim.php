<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );


class Victim extends MY_Controller {
    public function __construct() {
        parent::__construct ();
        $this->load->helper ( 'url' );
        $this->load->library('session');
    }
	public function index() {
		
		
		$this->load->model('volunteer_model');
        $data['districts'] = $this->volunteer_model->getDistrictList();
        
        
		$this->load->view ( 'header', $data );
		
		$this->load->view ( 'victim/list', $data );
		$this->load->view('modals');

		$this->load->view ( 'footer' );
	}


	public function district_details($district_id) {		
		$this->load->model('volunteer_model');
        $data['district_detail'] = $this->volunteer_model->getDistrictdetail_byid($district_id);
       /* print_r($data['district_detail']);
        die();*/
		$this->load->view ( 'header', $data );
		$this->load->view ( 'nav');
		$this->load->view ( 'victim/detail', $data );
		$this->load->view ( 'modals');
		$this->load->view ( 'footer' );
	}

	public function add() {
		$data = array ();
		
		if ($_POST) {


			$data ['first_name'] = Utils::get_from_POST ( "first_name" );
			$data ['middle_name'] = Utils::get_from_POST ( "middle_name" );
			$data ['last_name'] = Utils::get_from_POST ( "last_name" ) ;
			$data ['gender'] = Utils::get_from_POST ( "gender" );
			$data ['age'] = Utils::get_from_POST ( "age" );

			$data ['address1'] = Utils::get_from_POST ( "address1" );
			$data ['tole'] = Utils::get_from_POST ( "tole" );
			$data ['district'] = Utils::get_from_POST ( "district" );
			$data ['ward_num'] = Utils::get_from_POST ( "ward" );
			$data ['vdc'] = Utils::get_from_POST ( "vdc_municipality" );
			if($data['vdc']==""){
				$data["vdc"]="";
			}
			// echo isset($data ['vdc']) ;
			// die($data["vdc"]);
			//$data ['fb_id'] = Utils::get_from_POST ( "fb_id" );

			$num_family =  Utils::get_from_POST ( "num_family" , 0);


			$family = array();
			for ($a=0;$a<$num_family;$a++)
			{
				$victim_family_name = Utils::get_from_POST ( "name".$a );

				if ($victim_family_name!="")
				{
				$family_member = array();
				$family_member['name'] = $victim_family_name;
				$family_member['age'] = Utils::get_from_POST ( "age".$a );
				$family_member['gender'] = Utils::get_from_POST ( "gender".$a );
				$family_member['status'] = Utils::get_from_POST ( "status".$a );
				$family[] = $family_member;
				}
			}

			$this->load->model ( 'Victim_model' );
			$this->load->model ( 'Victim_family_model' );


			$insert_results = $this->Victim_model->addVictim ( $data );



			if ($insert_results ['results']) {

				$insert_id = $insert_results ['id'];
				
				$_SESSION["victim_id"] = $insert_id;
				foreach($family as $member)
				{
					$member['victim_parent_id'] = $insert_id;
					$family_insert_results = $this->Victim_family_model->addVictimFamily ( $member );
				}


				$this->session->set_userdata( 'flash_msg_type', "success" );
				$this->session->set_flashdata( 'flash_msg', "Data Saved Successfully" );

				redirect ( '/relief/condition', 'refresh' );


			} else {
				$this->session->set_userdata( 'flash_msg_type', "danger" );
				$this->session->set_flashdata( 'flash_msg', "Sorry, we were unable to add the data. Please try again" );
				redirect ( '/user/register', 'refresh' );
			}
		} else {
			$this->load->model('volunteer_model');
			$data['districts']=$this->volunteer_model->getDistrictList();

			$this->load->view ( 'header', $data );
            $this->load->view ( 'nav', $data );
			$this->load->view ( 'relief/info_form', $data );
			$this->load->view('modals');
			$this->load->view ( 'footer' );

			//$this->load->view ( 'footer' );

		}
	}

	

}
