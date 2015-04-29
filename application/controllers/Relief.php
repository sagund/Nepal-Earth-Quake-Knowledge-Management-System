<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Relief extends CI_Controller {


	public function index()
	{
        $data['body'] = $this->load->view('relief/form', '', true);
        //charge the view "contact" in the other view template
         $this->load->view('base', $data);
	}

    public function save()
    {

    }
}
