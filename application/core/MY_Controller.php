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

}
