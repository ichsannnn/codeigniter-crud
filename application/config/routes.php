<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'crud/getIndex';
$route['get-create'] = 'crud/getCreate';
$route['post-create'] = 'crud/postCreate';
$route['edit/(:any)'] = 'crud/getEdit/$1';
$route['post-edit/(:any)'] = 'crud/postEdit/$1';
$route['delete/(:any)'] = 'crud/getDelete/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
