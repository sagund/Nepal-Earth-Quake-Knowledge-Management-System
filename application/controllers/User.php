<?php
class User extends MY_Controller {
	public function __construct() {
		parent::__construct ();
		$this->load->helper ( 'url' );
		$this->load->model('Users_model');
	}


	public function dashboard() {

		$logged_in = Authenticator::isLoggedIn ();
		if(!$logged_in){
			redirect ( base_url(), 'refresh' );
		}
		$data = array ();
		$data ['logged_in'] = $logged_in;

		$data ['UD'] = $this->session->userdata['UD'];

		$this->load->view ( 'header', $data );
		$this->load->view ( 'nav' );
		$this->load->view ( 'user/dashboard', $data );
		$this->load->view('modals');
		$this->load->view ( 'footer', $data );

	}

	public function register() {

		if(Authenticator::isLoggedIn ()){
			$this->session->set_userdata( 'flash_msg_type', "success" );
			$this->session->set_flashdata( 'flash_msg', "You are already logged in" );
			redirect ( '/user/dashboard', 'refresh' );
		}


		$data = array ();

		$data['user_types'] = array('volunteer','representative','donor','editor',);
		if ($_POST) {
			$data ['username'] = "none";
			$data ['email'] = Utils::get_from_POST ( "email" );
			$data ['password'] = md5 ( Utils::get_from_POST ( "password" ) );
			$data ['first_name'] = Utils::get_from_POST ( "first_name" );
			$data ['last_name'] = Utils::get_from_POST ( "last_name" );
			$data ['phone'] = Utils::get_from_POST ( "phone" );
			$data ['city'] = Utils::get_from_POST ( "city" );
			$data ['country'] = Utils::get_from_POST ( "country" );

			$data ['user_type'] = Utils::get_from_POST ( "user_type" );



			$counter = 0;

			foreach($data['user_types'] as $type){
				if($data['user_type']  == $type){
					$counter ++;
				}
			}
			if($counter == 0){
				$this->session->set_userdata( 'flash_msg_type', "danger" );
				$this->session->set_flashdata( 'flash_msg', "Invalid Role Chosen" );
				redirect ( '/user/register', 'refresh' );
			}

			if ($this->Users_model->doesValueExist("email", $data ['email']))
			{

				$this->session->set_userdata( 'flash_msg_type', "danger" );
				$this->session->set_flashdata( 'flash_msg', "Sorry, email address is already registered" );
				redirect ( '/user/register', 'refresh' );
			}
			unset($data['user_types']);

			$insert_results = $this->Users_model->addUser ( $data );

			if ($insert_results ['results']) {

				$insert_id = $insert_results ['id'];

				$user_data_array = array (

						'first_name' => $data ['first_name'],
						'last_name' => $data ['last_name'],
						'email' => $data ['email'],
						'id' => $insert_id,
						'user_type' => $data['user_type']
				);

				$this->authenticateUser ( $user_data_array );

				$this->session->set_userdata( 'flash_msg_type', "success" );
				$this->session->set_flashdata( 'flash_msg', "Account created Successfully" );

				redirect ( '/user/dashboard', 'refresh' );

				// $this->load->view('templates/header', $data);
				// $this->load->view('user/register_success', $data);
				// $this->load->view('templates/footer');
			} else {
				$this->session->set_userdata( 'flash_msg_type', "danger" );
				$this->session->set_flashdata( 'flash_msg', "Sorry, we were unable to create a new account. Please try again" );
				redirect ( '/user/register', 'refresh' );
			}
		} else {
			$data['countries'] = $this->Users_model->getCountryList();


			$this->load->view ( 'header', $data );
			$this->load->view ( 'nav', $data );

			$this->load->view ( 'user/register', $data );
			$this->load->view('modals');
			$this->load->view ( 'footer' );
		}
	}


	public function login() {

		if(Authenticator::isLoggedIn ()){
			$this->session->set_userdata( 'flash_msg_type', "success" );
			$this->session->set_flashdata( 'flash_msg', "You are already logged in" );
			redirect ( '/user/dashboard', 'refresh' );
		}

		$data = array();
		if ($_POST) {
			$r = Utils::get_from_POST ( 'r' );

			$email = Utils::get_from_POST ( 'email' );
			$password = Utils::get_from_POST ('password' );

			$matched_data = $this->Users_model->getEmailPasswordMatchExist ( $email, md5($password) );

			if ($matched_data->result_id->num_rows > 0) {


				$user_data_array = $matched_data->result_array ();


				$user_data = $user_data_array [0];


				$this->authenticateUser ( $user_data );



				$this->session->set_userdata( 'flash_msg_type', "success" );
				$this->session->set_flashdata( 'flash_msg', "Successfully Logged in" );

				if ($r == "") {
					redirect ( '/user/dashboard', 'refresh' );
				} else {
					redirect ( '/' . $r, 'refresh' );
				}
			} else {


				$this->session->set_userdata( 'flash_msg_type', "danger" );
				$this->session->set_flashdata( 'flash_msg', "Sorry, your login and password did not match any records in our database. Please try again" );
				redirect ( '/user/login', 'refresh' );
			}
		}



			$this->load->view ( 'header', $data );
			$this->load->view ( 'nav', $data );
			$this->load->view ( 'user/login', $data );
			$this->load->view('modals');
			$this->load->view ( 'footer' );

	}
	public function authenticateUser($user_data_array) {

		// $this->load->library('emailer');
		// $this->emailer->sendWelcomeEmail("nilesh.dosooye@gmail.com","IL");

		$auth_data = array (
				'first_name' => $user_data_array ['first_name'],
				'last_name' => $user_data_array ['last_name'],
				'email_address' => $user_data_array ['email'],
				'id' => $user_data_array ['id'],
				'type' =>$user_data_array ['user_type']
		);

		Authenticator::setAuthenticatedCookieForUser ( $user_data_array ['id'], $user_data_array ['user_type']);

		$this->session->set_userdata("UD", $auth_data);
	}


	public function logout() {
		Authenticator::setLoggedOutCookieForUser ();
		$this->session->sess_destroy();

		
		redirect ( '/user/dashboard', 'refresh' );
	}
}
