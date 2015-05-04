<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Volunteer_model extends CI_Model {
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
	}

	public function getDistrictList(){
		$sql = "SELECT * FROM districts ORDER BY name ASC";
		$query=$this->db->query($sql);
		$result= $query->result_array();
		return $result;
		
	}
	
	
	
	
}
