<?php if( ! defined('BASEPATH')) exit('No dorect script access allowed');

class admin_model extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
	}

	 /*///////////////////////////////////
	 For Static page Purpose Starts here
	 ///////////////////////////////// */

	function insertStaticPage($page_title,$desc,$status,$page_url,$page_id=""){
		$date=date('Y-m-d H:i:s');
		if($page_id==""){
			$sql="Insert into pages(page_title,page_description,status,url,updated_date)values(?,?,?,?,?)";
			$this->db->query($sql,array($page_title,$desc,$status,$page_url,$date));
			return $this->db->insert_id();
		}else{
			
			$sql="UPDATE pages SET page_title=?,page_description=?,status=?,url=?,updated_date=? WHERE id=?";
			$this->db->query($sql,array($page_title,$desc,$status,$page_url,$date,$page_id));
			return $this->db->affected_rows();
		}
		
	}

	function getAllStaticPages(){
		$sql="Select * from pages";
		$query=$this->db->query($sql);
		return $query->result_array();
	}

	function getAllStaticPagesForHome(){
		$sql="Select * from pages where status=1";
		$query=$this->db->query($sql);
		return $query->result_array();
	}

	function getStaticPageDetail($page_url){
		$sql="Select * from pages where url=? and status=1";
		$query=$this->db->query($sql,$page_url);
		return $query->row_array();
	}

	function getStaticPageDetailforedit($page_id){
		$sql="Select * from pages where id=?";
		$query=$this->db->query($sql,$page_id);
		return $query->row_array();
	}

	function delete($id,$tblname){
		
	 	$sql="Delete from $tblname where id=?";
	 	if($tblname=="tblpageslider" || $tblname=='tblstaticpage'){
			$sql="Delete from $tblname where id=?";
		}
	 	$this->db->query($sql,$id);
	 	return $this->db->affected_rows();
	 }

	/*/////////////////////////////
	 For Static page Purpose Ends here
	 ///////////////////////////// */

	 function checkLoginDetail($email,$password){
	 	$sql="Select * from user where email=? and password=? and user_type='admin'";
	 	$query=$this->db->query($sql,array($email,md5($password)));
	 	return $query->row_array();
	 }

} 