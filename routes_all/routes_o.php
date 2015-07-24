<?php

$route['default_controller'] = 'products/product_info';
$route['product/(:any)'] = 'products/strain_index/$1';

$route['user/reservations'] = 'products/get_user_reservations';


// jason's routes
$route['search/(:any)'] = 'mains/search/$1';

$route['vendor/page/(:any)'] = 'products/get_single_vendor/$1';

// vikash's vendor routes
$route['vendor/home'] = 'vendors/login';
$route['vendor/dashboard'] = 'vendors/vendor_home';
$route['vendor/register'] = 'vendors/registration';
$route['vendor/product/search'] = 'vendors/search_product';
$route['vendor/product/add'] = 'vendors/add_product';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

?>