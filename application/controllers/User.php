<?php
class User extends MY_Controller {
	public function __construct() {
		parent::__construct ();
		$this->load->helper ( 'url' );
	}


	public function dashboard() {

		$logged_in = Authenticator::isLoggedIn ();

		$data = array ();
		$data ['logged_in'] = $logged_in;

		$this->load->view ( 'templates/header', $data );
		$this->load->view ( 'user/dashboard', $data );
		$this->load->view ( 'templates/footer', $data );

	}

	public function register() {
		$data = array ();
		if ($_POST) {





			$data ['username'] = "none";
			$data ['email'] = Utils::get_from_POST ( "email" );
			$data ['password'] = md5 ( Utils::get_from_POST ( "password" ) );
			$data ['first_name'] = Utils::get_from_POST ( "first_name" );
			$data ['last_name'] = Utils::get_from_POST ( "last_name" );
			$data ['phone'] = Utils::get_from_POST ( "phone" );
			$data ['city'] = Utils::get_from_POST ( "city" );
			$data ['country'] = Utils::get_from_POST ( "country" );


			$this->load->model('Users_model');
			if ($this->Users_model->doesValueExist("email", $data ['email']));
			{

				SESSION::set ( 'flash_msg_type', "danger" );
				SESSION::set ( 'flash_msg', "Sorry, email address is already registered" );
				redirect ( '/user/register', 'refresh' );
			}


			$insert_results = $this->Users_model->addUser ( $data );

			if ($insert_results ['results']) {

				$insert_id = $insert_results ['id'];

				$user_data_array = array (

						'first_name' => $data ['first_name'],
						'last_name' => $data ['last_name'],
						'email' => $data ['email'],
						'id' => $insert_id
				);

				$this->authenticateUser ( $user_data_array );

				SESSION::set ( 'flash_msg_type', "success" );
				SESSION::set ( 'flash_msg', "Account created Successfully" );

				redirect ( '/user/dashboard', 'refresh' );

				// $this->load->view('templates/header', $data);
				// $this->load->view('user/register_success', $data);
				// $this->load->view('templates/footer');
			} else {
				SESSION::set ( 'flash_msg_type', "danger" );
				SESSION::set ( 'flash_msg', "Sorry, we were unable to create a new account. Please try again" );
				redirect ( '/user/register', 'refresh' );
			}
		} else {

			$this->load->view ( 'header', $data );
			$this->load->view ( 'nav', $data );

			$this->load->view ( 'user/register', $data );
			$this->load->view ( 'footer' );
		}
	}


	public function login() {

		$data = array();
		if ($_POST) {
			$r = Utils::get_from_POST ( 'r' );
			$this->load->model ( 'Users_model' );
			$email = Utils::get_from_POST ( 'email' );
			$password = Utils::get_from_POST ('password' );

			$matched_data = $this->Users_model->getEmailPasswordMatchExist ( $email, md5($password) );

			if ($matched_data->result_id->num_rows > 0) {


				$user_data_array = $matched_data->result_array ();
				$user_data = $user_data_array [0];
				$this->authenticateUser ( $user_data );



				SESSION::set ( 'flash_msg_type', "success" );
				SESSION::set ( 'flash_msg', "Successfully Logged in" );

				if ($r == "") {
					redirect ( '/user/dashboard', 'refresh' );
				} else {
					redirect ( '/' . $r, 'refresh' );
				}
			} else {


				SESSION::set ( 'flash_msg_type', "danger" );
				SESSION::set ( 'flash_msg', "Sorry, your login and password did not match any records in our database. Please try again" );
				redirect ( '/user/login', 'refresh' );
			}
		}



			$this->load->view ( 'header', $data );
			$this->load->view ( 'nav', $data );
			$this->load->view ( 'user/login', $data );
			$this->load->view ( 'footer' );

	}
	public function authenticateUser($user_data_array) {

		// $this->load->library('emailer');
		// $this->emailer->sendWelcomeEmail("nilesh.dosooye@gmail.com","IL");
		$auth_data = array (
				'first_name' => $user_data_array ['first_name'],
				'last_name' => $user_data_array ['last_name'],
				'email_address' => $user_data_array ['email'],
				'id' => $user_data_array ['id']
		);


		Authenticator::setAuthenticatedCookieForUser ( $user_data_array ['id'] );
	}
	public function logout() {
		Authenticator::setLoggedOutCookieForUser ();
		redirect ( '/user/dashboard', 'refresh' );
	}
}
