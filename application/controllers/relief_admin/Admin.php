<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );


class Admin extends MY_Controller {
    public function __construct() {
        parent::__construct ();
        $this->load->helper ( 'url' );
        $this->load->model('admin_model');

    }

    public function index(){
    	//$data = array();
		$this->load->view ( 'relief_admin/admin_header');
		$this->load->view('relief_admin/admin_login.php');
		$this->load->view ( 'relief_admin/admin_footer');
    }

    public function login(){
    	$email=$this->input->post('email');
    	$password=$this->input->post('password');
    	$login=$this->admin_model->checkLoginDetail($email,$password);

    	if($login){
    		SESSION::set ( 'flash_msg_type', "success" );
			SESSION::set ( 'flash_msg', "Successfully Logged in" );
			$this->load->view ( 'relief_admin/admin_header');
			$this->load->view('relief_admin/admin');
			$this->load->view ( 'relief_admin/admin_footer');
    	}else{
    		SESSION::set ( 'flash_msg_type', "danger" );
			SESSION::set ( 'flash_msg', "Sorry, your login and password did not match any records in our database. Please try again" );
			redirect ( 'admin', 'refresh' );
    	}

    }

    function logout(){
    	SESSION::set ( 'flash_msg_type', "success" );
		SESSION::set ( 'flash_msg', "Successfully Logged out" );
		redirect ( 'admin', 'refresh' );
    }

    function add_media(){
    	$data=array();
    	if($_POST){
    		//CODE HERE .....
    	}else{
    		$this->load->view ( 'relief_admin/admin_header');
			$this->load->view('relief_admin/admin_media');
			$this->load->view ( 'relief_admin/admin_footer');
    	}
    }


    /*/////////////////////
	 For Static Page Purpose Starts here
	 /////////////////////// */
	public function pages($page_id=""){
	 	$this->data['pages']=$this->admin_model->getAllStaticPages();
	 	//print_r($this->data['pages']);

		if($page_id!=""){
			$this->data['page_detail']=$this->admin_model->getStaticPageDetailforedit($page_id);
		}
		$this->load->view('relief_admin/admin_header',$this->data);
		//$this->load->view('flash_message.inc');
		$this->load->view('relief_admin/admin-pages');
		$this->load->view('relief_admin/admin_footer');
	}

	public function addpage($page_id=""){
	 	$page_title=$this->input->post('page_title');
	 	$desc=$this->input->post('editor1');
	 	$status=$this->input->post('status');
	 	$page_url=$this->input->post('page_url');
	 	
	 	if ($status=="") {
	 		$status=0;
	 	}
	 	if($this->form_validation->run('admin/page')==false){
	 		if($page_id!=""){
				$this->pages();
	 		}else{
	 			$this->pages($page_id);
	 		}
	 		
	 	}else{
	 		if($page_id==""){
	 			$insert=$this->admin_model->insertStaticPage($page_title,$desc,$status,$page_url);
	 			if($insert!=0){
	 				SESSION::set ( 'flash_msg_type', "success" );
					SESSION::set('msg','Page Detail Insert Successfull.');
					return redirect(base_url().'admin/pages');
				}else{
					SESSION::set ( 'flash_msg_type', "danger" );
					SESSION::set('msg','Page Detail Insert Failed Or No changes has been made.');
					return redirect(base_url().'admin/pages');
				}
	 		}else{
	 			$update=$this->admin_model->insertStaticPage($page_title,$desc,$status,$page_url,$page_id);
				
				/*$this->session->set_flashdata('msg','<div class="help-block alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Page Detail Update Successfull.</div>');*/
				return redirect(base_url().'admin/pages');
	 		}
	 	}
	}

	public function deletepage($page_id){
		$delete=$this->admin_model->delete($page_id,"pages");
		//$this->session->set_flashdata('msg','<div class="help-block alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Page Deleted Successfully.</div>');
		return redirect(base_url().'admin/pages');
	}
	 /*/////////////////////
	 For Static Page Purpose Ends here
	 /////////////////////// */
	/***********************************************************************************/

}