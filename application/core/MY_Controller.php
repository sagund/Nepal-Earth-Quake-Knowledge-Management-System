<?php

if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );

require_once ('application/libraries/exceptions/NepalReliefException.php');

class MY_Controller extends CI_Controller
{


	public function __construct()
	{
		parent::__construct ();

		$this->load->model('base_model');
		$this->load->helper ('url' );
		$this->load->library('session');


	}

	public function checkIfAuthenticated()
	{
		if (!Authenticator::isLoggedIn())
		{
			$this->session->set_userdata( 'flash_msg_type', "danger" );
			$this->session->set_flashdata( 'flash_msg', "Sorry you need to be logged in to access this page" );

			redirect ( '/user/login', 'refresh' );
		}
	}


}
