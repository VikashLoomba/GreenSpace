<?php

$route['default_controller'] = 'products/product_info';
$route['product/(:any)'] = 'products/strain_index/$1';
$route['']
//change route to take a parameter
$route['vendor/(:any)'] = 'products/get_single_vendor/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

?>