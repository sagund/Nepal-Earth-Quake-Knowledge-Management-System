<?php if( ! defined('BASEPATH')) exit('No dorect script access allowed');

class rescue_model extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
	
	}
	public function insertRescue($data)
    {
            $results = $this->db->insert('rescue', $data);
            $insert_id = "-1";
            if ($results)
            {
                $insert_id = $this->db->insert_id();
                
            }
            return  $insert_id;     


    }

}