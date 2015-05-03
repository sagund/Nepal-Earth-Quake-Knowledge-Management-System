<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/


/**
 * ******************************************
 *  USER ROUTES
 */
$route['user/register'] = 'user/register';
$route['user/login'] = 'user/login';
$route['user/logout'] = 'user/logout';
$route['user/dashboard'] = 'user/dashboard';

$route['about'] = 'volunteer/about';
$route['emergency-contacts'] = 'volunteer/emergency';
$route['help'] = 'volunteer/help';
$route['register'] = 'user/register';
$route['login'] = 'user/login';

$route['victim/add'] = 'relief/index';




// ADMIN Routes


//USER CRUD ADMIN
$route['admin/crud/user/(:any)'] 			=  "relief_admin/reliefcrud/user/$1";
$route['admin/crud/user/(:any)/(:any)'] 			=  "relief_admin/reliefcrud/user/$1/$2";

// DONATION CRUD ADMIN
$route['admin/crud/donation/(:any)'] 			=  "relief_admin/reliefcrud/donation/$1";
$route['admin/crud/donation/(:any)/(:any)'] 			=  "relief_admin/reliefcrud/donation/$1/$2";

// VILLAGE CRUD ADMIN
$route['admin/crud/village/(:any)'] 			=  "relief_admin/reliefcrud/village/$1";
$route['admin/crud/village/(:any)/(:any)'] 			=  "relief_admin/reliefcrud/village/$1/$2";


// DONATION_DISTRIBUTION CRUD ADMIN
$route['admin/crud/donation_distribution/(:any)'] 			=  "relief_admin/reliefcrud/donation_distribution/$1";
$route['admin/crud/donation_distribution/(:any)/(:any)'] 			=  "relief_admin/reliefcrud/donation_distribution/$1/$2";


// NEED_RELIEF CRUD ADMIN
$route['admin/crud/need_relief/(:any)'] 			=  "relief_admin/reliefcrud/need_relief/$1";
$route['admin/crud/need_relief/(:any)/(:any)'] 			=  "relief_admin/reliefcrud/need_relief/$1/$2";


// DISTRICTS CRUD ADMIN
$route['admin/crud/districts/(:any)'] 			=  "relief_admin/reliefcrud/districts/$1";
$route['admin/crud/districts/(:any)/(:any)'] 			=  "relief_admin/reliefcrud/districts/$1/$2";

// DISTRICT UNITS CRUD ADMIN
$route['admin/crud/district_units/(:any)'] 			=  "relief_admin/reliefcrud/district_units/$1";
$route['admin/crud/district_units/(:any)/(:any)'] 			=  "relief_admin/reliefcrud/district_units/$1/$2";

// WARDS CRUD ADMIN
$route['admin/crud/wards/(:any)'] 			=  "relief_admin/reliefcrud/wards/$1";
$route['admin/crud/wards/(:any)/(:any)'] 			=  "relief_admin/reliefcrud/wards/$1/$2";



$route['admin/crud/(:any)'] 			=  "relief_admin/reliefcrud/$1";
$route['admin'] ="relief_admin/reliefcrud";

//$route['default_controller'] = 'relief';

$route['default_controller'] = 'volunteer/home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
