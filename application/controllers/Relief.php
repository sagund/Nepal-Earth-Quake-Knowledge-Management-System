<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );


class Relief extends MY_Controller {
    public function __construct() {
        parent::__construct ();
        $this->load->helper ( 'url' );
        $this->load->library('upload');
        $this->load->helper('string');
    }

	public function condition() {



		$data = array ();
		$userfile=($this->input->post('photographs'));
		$config['upload_path'] = './images';
		$config['allowed_types'] = 'jpg|png';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		$this->upload->initialize($config);
		$upload_data = $this->upload->data();
		$this->upload->do_upload('photographs');
		if(empty($_FILES['photographs']['name'])) {
		$file_name = "0";
		}
		else {
			$file_name = $_FILES['photographs']['name'];
		}


		$this->upload->initialize($config);


		if ($_POST) {


			$data ['house_conditions'] = Utils::get_from_POST ( "house_condition" );
			$data ['family_conditions'] = Utils::get_from_POST ( "family_condition" );
			$data ['flag_safe_water'] = Utils::get_from_POST ( "water" ) ;
			$data ['flag_safe_food'] = Utils::get_from_POST ( "meal" );
			$data ['flag_medical_access'] = Utils::get_from_POST ( "medical" );

			$data ['flag_temporary_shelter'] = Utils::get_from_POST ( "temp_shelter" );
			$data ['flag_permanent_shelter'] = Utils::get_from_POST ( "perm_shelter" );
			$data ['flag_contagious_disease'] = Utils::get_from_POST ( "cont_disease" );
			$data ['house_conditions'] = Utils::get_from_POST ( "house_condition" );
			$physicalvalue=array();
			foreach ($_POST['physical_state'] as $physical_value)
			{

  			$physicalvalue[] = $physical_value;
			}
			$physicalvalue1=implode(',',$physicalvalue);


  			$data ['physical_state'] = $physicalvalue1;

  			$psychologicalvalue=array();
			foreach ($_POST['psychological_state'] as $psychological_value)
			{

  			$psychologicalvalue[] = $psychological_value;
			}
			$psychologicalvalue1=implode(',',$psychologicalvalue);


			$data ['psychological_state'] = $psychologicalvalue1;



			$data ['economic_state'] = Utils::get_from_POST ( "economic_state" );
			$data ['initial_assessment'] = Utils::get_from_POST ( "initial_assesment" );
			$data ['photographs'] = $file_name;



			//$data ['fb_id'] = Utils::get_from_POST ( "fb_id" );




			$this->load->model ( 'Victim_model' );
			$this->load->model ( 'Victim_family_model' );

			$insert_results = $this->Victim_model->addVictim ($data,"extra");


			if ($insert_results ['results']) {

				$insert_id = $insert_results ['id'];

				// foreach($family as $member)
				// {
				// 	$member['victim_parent_id'] = $insert_id;
				// 	$family_insert_results = $this->Victim_family_model->addVictimFamily ( $member );
				// }


				SESSION::set ( 'flash_msg_type', "success" );
				SESSION::set ( 'flash_msg', "Data Saved Successfully" );

				redirect ( '/', 'refresh' );


			} else {
				SESSION::set ( 'flash_msg_type', "danger" );
				SESSION::set ( 'flash_msg', "Sorry, we were unable to add the data. Please try again" );
				redirect ( '/user/register', 'refresh' );
			}
		} else {


			$this->load->view ( 'header', $data );
            $this->load->view ( 'nav', $data );
			$this->load->view ( 'relief/condition_form', $data );

			$this->load->view ('footer' );

			//$this->load->view ( 'footer' );

		}
	}

}
