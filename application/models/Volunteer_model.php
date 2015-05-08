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
		$sql = "SELECT districts.*,zones.zone_name,district_records.death,district_records.injured FROM districts INNER JOIN zones ON(districts.zone_id=zones.zone_id) LEFT JOIN district_records ON(districts.name=district_records.district_name) ORDER BY name ASC";
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

	public function getDistrictdetail_byid($district_id){
		$sql = "SELECT districts.*,zones.zone_name,district_records.* FROM districts INNER JOIN zones ON(districts.zone_id=zones.zone_id) LEFT JOIN district_records ON(districts.name=district_records.district_name) WHERE districts.id = ?";
		$query=$this->db->query($sql,array($district_id));
		return $query->row_array();
	}
	
	
	
	
}
