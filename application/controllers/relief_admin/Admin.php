<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );


class Admin extends MY_Controller {
	public function __construct() {
		parent::__construct ();
		$this->load->helper ( 'url','form' );
		$this->load->model('admin_model');
		$this->load->library('upload');
		$this->load->helper('download');
		$this->load->helper('inflector');

	}

	public function index(){
    	//$data = array();
    	if($this->session->userdata("admin_detail")){    		
    		
			return redirect('admin/crud');
    	}
		$this->load->view ( 'relief_admin/admin_header');
		$this->load->view('relief_admin/admin_login.php');
		$this->load->view ( 'relief_admin/admin_footer');
	}

	public function login(){
		if($this->session->userdata("admin_detail")){
			$this->session->set_userdata( 'flash_msg_type', "success" );
			$this->session->set_flashdata( 'flash_msg', "Already Logged in" );
    		return redirect('admin/crud');
    	}
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$login=$this->admin_model->checkLoginDetail($email,$password);

		if($login){
			$this->session->set_userdata("admin_detail",$login);
			$this->session->set_userdata( 'flash_msg_type', "success" );
			$this->session->set_flashdata( 'flash_msg', "Successfully Logged in" );
			$this->load->view ( 'relief_admin/admin_header');
			$this->load->view('relief_admin/admin');
			$this->load->view ( 'relief_admin/admin_footer');
		}else{
			$this->session->set_userdata( 'flash_msg_type', "danger" );
			$this->session->set_flashdata( 'flash_msg', "Sorry, your login and password did not match any records in our database. Please try again" );
			redirect ( 'admin', 'refresh' );
		}

	}

	function logout(){
		$this->session->unset_userdata("admin_detail");
		$this->session->set_userdata( 'flash_msg_type', "success" );
		$this->session->set_flashdata( 'flash_msg', "Successfully Logged out" );
		redirect ( 'admin', 'refresh' );
	}

	function add_media($id=NULL){

		$data=array();
		if($_POST){
			$userfile=($this->input->post('media'));
			$config['upload_path'] = './images/media';
			$config['allowed_types'] = 'jpg|png';
			$config['max_width']  = '3072';
			$config['max_height']  = '3072';
			$this->upload->initialize($config);
			$upload_data = $this->upload->data(); 		
			$this->upload->do_upload('media');
			if(empty($_FILES['media']['name'])) {
				$file_name = "0";
			}
			else {
				$file_name = $_FILES['media']['name'];

			}
			$media_link=Utils::get_from_POST ( "media_link" );
			// Read the file's contents


			$data['media_link']=$media_link;

			
			$data ['caption'] = Utils::get_from_POST ( "caption" );
			$data ['source'] = Utils::get_from_POST ( "media_source" ) ;
			$media_delete_flag=Utils::get_from_POST ("media_delete_flag");
			
			if($file_name!="0")
			{
				$data ['file_name'] = $file_name;

			}
			if($media_delete_flag=="yes"){
				$data ['file_name'] ="0";
			}

			if($media_link!=NULL){
				$filenameIn  = $media_link;
				$filenameOut = base_url(). 'images/media/' . basename($media_link);

				$contentOrFalseOnFailure   = file_get_contents($filenameIn);
				$byteCountOrFalseOnFailure = file_put_contents($filenameOut, $contentOrFalseOnFailure);

			}

			if($id==NULL){
				$insert_results=$this->admin_model->add_media_files ($data);
			}
			else{

				$insert_results=$this->admin_model->add_media_files ($data,$id);
			}


			if ($insert_results ['results']) {

				$insert_id = $insert_results ['media_id'];

				$this->session->set_userdata( 'flash_msg_type', "success" );
				$this->session->set_flashdata( 'flash_msg', "Data saved Successfully." );
				redirect ( base_url().'admin/media', 'refresh' );


			} else {
				$this->session->set_userdata( 'flash_msg_type', "danger" );
				$this->session->set_flashdata( 'flash_msg', "Sorry, we were unable to add the data. Please try again" );
				redirect ( '/user/register', 'refresh' );
			}

    		//CODE HERE .....
		}

		else{

			$media_data['media_m']=$this->admin_model->get_media_data($id);
			$this->load->view ( 'relief_admin/admin_header');
			
			if($id==NULL){$this->load->view('relief_admin/admin_media',$media_data);}
			else{$this->load->view('relief_admin/admin_media_edit',$media_data);}
			$this->load->view ( 'relief_admin/admin_footer');
		}
	}



	public function delete_media($id){
		$media_data=$this->admin_model->get_media_data($id);
		
		
		
		$d_results=$this->admin_model->delete_media($id);
		/*
//to delete media file -TODO
		foreach ($media_data as $mdd){
			$exact_file_name= $mdd['file_name'];
		}
		if ($d_results ['results']) {
			$md_name=$d_results['file_name'];
			SESSION::set ( 'flash_msg_type', "success" );
			//$act_media_path=base_url().'images/media/';
			redirect ( base_url().'admin/media', 'refresh' );
			//unlink($act_media_path."/".$exact_file_name);
			
		}*/
		redirect ( base_url().'admin/media', 'refresh' );
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
	 				$this->session->set_userdata( 'flash_msg_type', "success" );
	 				$this->session->set_flashdata('msg','Page Detail Insert Successfull.');
	 				return redirect(base_url().'admin/pages');
	 			}else{
	 				$this->session->set_userdata( 'flash_msg_type', "danger" );
	 				$this->session->set_flashdata('msg','Page Detail Insert Failed Or No changes has been made.');
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