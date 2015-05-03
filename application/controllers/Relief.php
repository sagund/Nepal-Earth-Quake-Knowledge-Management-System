<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Relief extends MY_Controller {
    public function __construct() {
        parent::__construct ();
        $this->load->helper ( 'url' );
    }

	public function index() {
		$data = array ();
		if ($_POST) {
			$data ['first_name'] = Utils::get_from_POST ( "first_name" );
			$data ['middle_name'] = Utils::get_from_POST ( "middle_name" );
			$data ['last_name'] = md5 ( Utils::get_from_POST ( "last_name" ) );
			$data ['gender'] = Utils::get_from_POST ( "gender" );
			$data ['age'] = Utils::get_from_POST ( "age" );
			$data ['address1'] = Utils::get_from_POST ( "address1" );
			$data ['tole'] = Utils::get_from_POST ( "tole" );
			$data ['ward_num'] = Utils::get_from_POST ( "ward" );
			$data ['vdc'] = Utils::get_from_POST ( "vdc_municipality" );




			$this->load->model ( 'Needrelief_model' );
			$insert_results = $this->Needrelief_model->addNeedRelief ( $data );

			if ($insert_results ['results']) {

				$insert_id = $insert_results ['id'];

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

			$this->load->view ( 'templates/footer' );

			//$this->load->view ( 'footer' );

		}
	}

}
