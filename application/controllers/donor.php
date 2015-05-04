<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );


class Donor extends MY_Controller {
    public function __construct() {
        parent::__construct ();
        $this->load->helper ( 'url' );
    }

    public function index()
    {
    	$data=array();
    	if($_POST){

    	}else{
    		$this->load->view ( 'header', $data );
            $this->load->view ( 'nav', $data );
			$this->load->view ( 'donor/add_donor', $data );

			$this->load->view ( 'footer' );
    	}
    }

}