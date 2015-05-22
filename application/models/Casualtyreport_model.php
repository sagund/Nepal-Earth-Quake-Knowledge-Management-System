<?php
if (! defined('BASEPATH'))
{
exit('No direct script access allowed');
}


require_once('application/libraries/exceptions/NepalReliefException.php');

class CasualtyReport_model extends Base_Model {
	public function __construct()
    {
        parent::__construct();
        $this->_table = "casualty_report";
        $this->load->library('session');
    }

    public function addCasualty($data)
    {
            $data['date_added'] = Utils::getDateTime();
            $results = $this->db->insert($this->_table, $data);
            $insert_id = "-1";
            if ($results)
            {
                $insert_id = $this->db->insert_id();
                
            }
            return  array("results"=>$results,'id'=>$insert_id);     
    }
    
    public function getCasualty(){
		
	}

	
	
}
