<?php

if (! defined('BASEPATH'))
{
    exit('No direct script access allowed');
}

include_once 'application/models/container/user_info.php';
require_once('application/libraries/exceptions/NepalReliefException.php');


/**
 * User Model helps to perform all the database related functionalities for the user
 *
 * @category User
 * @author Nilesh Dosooye
 * @version 1.0
 * @name User_Model
 * @access public
 */
class Users_Model extends Base_Model
{


    public function __construct()
    {
        parent::__construct();
        $this->_table = "user";
    }

    public function addUser($data)
    {

    	$data['date_added'] = Utils::getDateTime();
    	$results = $this->db->insert($this->_table, $data);

    	$insert_id = "-1";
    	if ($results)
    	{
    		$insert_id = $this->db->insert_id();
    	}

    	return array("results"=>$results,'id'=>$insert_id);
    }


    public function getEmailPasswordMatchExist($email_address,$password)
    {

    	$sql = "SELECT id,first_name,last_name,email FROM ".$this->_table." where email = '{$email_address}' AND password = '{$password}'  ";

    	$results = $this->db->query($sql);

    	return $results;
    }


    public function getById($user_d,$fields_csv="*")
    {

    	$user_obj = parent::getById($user_d);
    	return $user_obj;
    }


}