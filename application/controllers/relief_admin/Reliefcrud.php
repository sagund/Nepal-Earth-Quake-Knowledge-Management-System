<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reliefcrud extends MY_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}


	public function index()
	{

		$data = array();
		$this->load->view ( 'relief_admin/admin_header', $data );
		$this->load->view('relief_admin/admin.php',$data);
		$this->load->view ( 'relief_admin/admin_footer', $data );



	}

	public function render_crud($output = null)
	{

		$this->load->view ( 'relief_admin/admin_header', $output );
			$this->load->view('relief_admin/relief_crud.php',$output);
		$this->load->view ( 'relief_admin/admin_footer', $output );



	}




	public function user()
	{
			$crud = new grocery_CRUD();

			$crud->set_table('user');

			//$crud->unset_add();
			//$crud->unset_delete();


			//$crud->set_relation('officeCode','offices','city');
			//$crud->display_as('officeCode','Office City');
			$crud->set_subject('User');
			$crud->required_fields('user_type','username','email','city');
//			$crud->set_field_upload('file_url','assets/uploads/files');
			$output = $crud->render();

			$this->render_crud($output);
	}

	public function donation()
	{
		$crud = new grocery_CRUD();

		$crud->set_table('donation');
		$crud->set_relation('user_id','user','username');

		$crud->set_subject('Donation');
		$crud->required_fields('item','num_items','item_type','where_to_collect');
		$crud->unset_add_fields('media_upload_type','media_upload_path');

		$output = $crud->render();

		$this->render_crud($output);
	}


	public function village()
	{
		$crud = new grocery_CRUD();

		$crud->set_table('village');

		$crud->set_subject('Village');
		$crud->required_fields('name');

		$output = $crud->render();

		$this->render_crud($output);
	}



	public function districts()
	{
		$crud = new grocery_CRUD();

		$crud->set_table('districts');

		$crud->set_subject('Districts');

		$output = $crud->render();

		$this->render_crud($output);
	}



	public function district_units()
	{
		$crud = new grocery_CRUD();

		$crud->set_table('district_units');
		$crud->set_relation('district_id','districts','name');

		$crud->set_subject('District Units');

		$output = $crud->render();

		$this->render_crud($output);
	}


	public function wards()
	{
		$crud = new grocery_CRUD();

		$crud->set_table('wards');
		$crud->set_relation('disctict_unit_id','district_units','name');

		$crud->set_subject('Wards');

		$output = $crud->render();

		$this->render_crud($output);
	}


	public function donation_distribution()
	{
		$crud = new grocery_CRUD();

		$crud->set_table('donation_distribution');
		$crud->set_relation('donation_id','donation','item');
		$crud->set_relation('village_id','village','name');

		$crud->set_subject('Donation Distribution');
		$crud->required_fields('donation_id','village_id');

		$output = $crud->render();

		$this->render_crud($output);
	}

	public function need_relief()
	{
		$crud = new grocery_CRUD();

		$crud->set_table('need_relief');

		$crud->set_relation('village_id','village','name');

		$crud->set_subject('Need Relief');
		$crud->required_fields('first_name','last_name');

		$output = $crud->render();

		$this->render_crud($output);
	}


}
