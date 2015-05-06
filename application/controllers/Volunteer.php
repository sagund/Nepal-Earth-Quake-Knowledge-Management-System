 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Volunteer extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('volunteer_model');
		$this->load->model('base_model');
	}

	public function index()
	{
		$data['districts'] = $this->volunteer_model->getDistrictList();
		$this->load->view('header');


        $this->load->view('volunteer/list',$data);
        $this->load->view('footer');
	}

	/*
	public function register(){
		$this->load->view('header');
		$data['districts'] = $this->volunteer_model->getDistrictList();
		$this->load->view('register_form',$data);
		$this->load->view('footer');
	}
	* */

	public function home(){
		$this->load->view('header');
		$this->load->view('nav');
		$this->load->view('home');
		$this->load->view('footer');
	}
	public function about(){
		$this->load->view('header');
		$this->load->view('about');
		$this->load->view('footer');
	}
	public function help(){
		$this->load->view('header');
		$this->load->view('help');
		$this->load->view('footer');
	}
	public function tomorrow(){
		$this->load->view('header');
		$this->load->view('tomorrow');
		$this->load->view('footer');
	}
	public function emergency(){
		$this->load->view('header');
		$this->load->view('emergencycontact');
		$this->load->view('footer');
	}
	public function agencies(){
		$this->load->view('header');
		$this->load->view('agencies');
		$this->load->view('footer');
	}
}
