<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );


class Victim extends MY_Controller {
    public function __construct() {
        parent::__construct ();
        $this->load->helper ( 'url' );
    }

	public function index() {
		$data = array ();
		$this->load->model('volunteer_model');
		$data['districts']=$this->volunteer_model->getDistrictList();
		if ($_POST) {


			$data ['first_name'] = Utils::get_from_POST ( "first_name" );
			$data ['middle_name'] = Utils::get_from_POST ( "middle_name" );
			$data ['last_name'] = Utils::get_from_POST ( "last_name" ) ;
			$data ['gender'] = Utils::get_from_POST ( "gender" );
			$data ['age'] = Utils::get_from_POST ( "age" );

			$data ['address1'] = Utils::get_from_POST ( "address1" );
			$data ['tole'] = Utils::get_from_POST ( "tole" );
			$data ['ward_num'] = Utils::get_from_POST ( "ward" );
			$data ['vdc'] = Utils::get_from_POST ( "vdc_municipality" );
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

				foreach($family as $member)
				{
					$member['victim_parent_id'] = $insert_id;
					$family_insert_results = $this->Victim_family_model->addVictimFamily ( $member );
				}


				SESSION::set ( 'flash_msg_type', "success" );
				SESSION::set ( 'flash_msg', "Data Saved Successfully" );

				redirect ( '/', 'refresh' );


			} else {
				SESSION::set ( 'flash_msg_type', "danger" );
				SESSION::set ( 'flash_msg', "Sorry, we were unable to add the data. Please try again" );
				redirect ( '/user/register', 'refresh' );
			}
		} else {


			$this->load->view ( 'header', $data );
            $this->load->view ( 'nav', $data );
			$this->load->view ( 'relief/info_form', $data );

			$this->load->view ( 'footer' );

			//$this->load->view ( 'footer' );

		}
	}

	public function getVDClist($district_id){
		

	}

}
