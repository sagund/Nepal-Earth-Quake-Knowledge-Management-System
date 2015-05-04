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
		$sql = "SELECT * FROM districts";
		$query=$this->db->query($sql);
		$result= $query->result_array();
		$final_result = array();
		foreach($result as $key=>$res){
				
				$sql = "SELECT * FROM district_units where district_id = ?";
				$query=$this->db->query($sql,$res['id']);
				$dis= $query->result_array();
			
				
				$res['district_units'] = $dis;
				$final_result[$key] = $res;
				
		}
		return $final_result;
		
	}
	
	
	
	
}
