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

//jasons routes
$route['default_controller'] = 'mains';
$route['search/(:any)'] = 'mains/search/$1';
$route['get_slugs'] = 'mains/get_slugs';
$route['get_JSON/(:any)'] = 'mains/get_JSON/$1';
$route['convert_JSON_To_Array/(:any)'] = 'mains/convert_JSON_To_Array/$1';
$route['insert_data/(:any)'] = 'mains/insert_data/$1';
$route['automate'] = 'mains/automate';

/*User Stuff*/
$route['user/dashboard'] = 'users/dashboard';
$route['login'] = 'users/user_login';
$route['logout'] = 'users/logout';
$route['register'] = 'users/user_registration';

//obi's routes
$route['products/add'] = 'products/add';
$route['product/(:any)'] = 'products/strain_index/$1';
$route['user/reservations'] = 'products/get_user_reservations';
$route['reservations'] = 'products/load_users_unconfirmed_reservations';
$route['confirm/(:any)'] = 'products/confirm_reservation/$1';
//vik routes
$route['vendor/home'] = 'vendors/login';
$route['vendor/dashboard'] = 'vendors/vendor_home';
$route['vendor/register'] = 'vendors/registration';
$route['vendor/product/search'] = 'vendors/search_product';
$route['vendor/product/add'] = 'vendors/add_product';
$route['vendor/product/show/(:any)'] = 'vendors/show_product/$1';



$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
