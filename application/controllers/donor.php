<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Donor extends MY_Controller {
	public function __construct() {
		parent::__construct ();
		$this->load->helper ( 'url' );
	}
	public function index() {

		// THis will redirect page to login screen if user is not authenticated
		parent::checkIfAuthenticated ();

		$data = array ();

		if ($_POST) {
			// need to implement donation insert code here....

			$data ['user_id'] = $_SESSION ['UD'] ['id'];

			$data ['item'] = Utils::get_from_POST ( "item_name" );
			$data ['item_desc'] = Utils::get_from_POST ( "item_desc" );
			$data ['item_type'] = Utils::get_from_POST ( "item_type" );
			$data ['num_items'] = Utils::get_from_POST ( "item_qty" );
			$data ['where_to_collect'] = Utils::get_from_POST ( "collection_point" );
			$data ['phone_number'] = Utils::get_from_POST ( "contact_number" );
			$data ['status'] = Utils::get_from_POST ( "status" );

			$this->load->model ( 'Donation_model' );

			$insert_results = $this->Donation_model->addDonor ( $data );

			if ($insert_results ['results']) {

				$insert_id = $insert_results ['id'];

				SESSION::set ( 'flash_msg_type', "success" );
				SESSION::set ( 'flash_msg', "Data Saved Successfully" );

				redirect ( '/user/dashboard', 'refresh' );
			} else {
				SESSION::set ( 'flash_msg_type', "danger" );
				SESSION::set ( 'flash_msg', "Sorry, we were unable to add the data. Please try again" );
				redirect ( '/donor', 'refresh' );
			}
		} else {

			$this->load->view ( 'header', $data );
			$this->load->view ( 'nav', $data );
			$this->load->view ( 'donor/add_donor', $data );

			$this->load->view ( 'footer', $data );
		}
	}
}