<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Donate extends MY_Controller {
	public function __construct() {
		parent::__construct ();
		$this->load->helper ( 'url' );
	}
	public function index() {

		// THis will redirect page to login screen if user is not authenticated
		parent::checkIfAuthenticated ();

		$data = array ();

		if ($_POST) {
			// need to implem ent donation insert code here....

			$data ['user_id'] = $_SESSION ['UD'] ['id'];

			$data ['item'] = Utils::get_from_POST ( "item_name" );
			$data ['item_desc'] = Utils::get_from_POST ( "item_desc" );
			$data ['item_type'] = Utils::get_from_POST ( "item_type" );

			$data ['item_unit'] = Utils::get_from_POST ( "item_unit" );
			$data ['donor_name'] = Utils::get_from_POST ( "donor_name" );

			$data ['num_items'] = Utils::get_from_POST ( "item_quantity" );
			$data ['where_to_collect'] = Utils::get_from_POST ( "collection_point" );
			$data ['phone_number'] = Utils::get_from_POST ( "donor_phone" );
			$data ['status'] = Utils::get_from_POST ( "item_status" );

			$this->load->model ( 'Donation_model' );

			$insert_results = $this->Donation_model->addDonor ( $data );

			if ($insert_results ['results']) {

				$insert_id = $insert_results ['id'];

				$this->session->set_userdata( 'flash_msg_type', "success" );
				$this->session->set_flashdata( 'flash_msg', "Data Saved Successfully" );

				redirect ( '/user/dashboard', 'refresh' );
			} else {
				$this->session->set_userdata( 'flash_msg_type', "danger" );
				$this->session->set_flashdata( 'flash_msg', "Sorry, we were unable to add the data. Please try again" );
				redirect ( '/donor', 'refresh' );
			}
		} else {

			$this->load->view ( 'header', $data );
			$this->load->view ( 'nav', $data );
			$this->load->view ( 'donor/donate', $data );
			$this->load->view('modals');
			$this->load->view ( 'footer', $data );
		}
	}
}