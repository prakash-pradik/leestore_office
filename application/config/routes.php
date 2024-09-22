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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login'] = 'login/index';
$route['logout'] = 'login/logout';

$route['dashboard'] = 'admin/dashboard';
$route['users'] = 'admin/users';
$route['incomes'] = 'admin/incomes';
$route['outcomes'] = 'admin/outcomes';
$route['daily_sales'] = 'admin/daily_sales';
$route['full_report/(:any)'] = 'admin/full_report/$1';
$route['buy_sell'] = 'admin/buy_sell';
$route['employee_advance'] = 'admin/employee_advance';
$route['employee_details/(:any)'] = 'admin/employee_details/$1';
$route['user_details/(:any)'] = 'admin/user_details/$1';

$route['print_test'] = 'admin/print_test';

$route['user_profile'] = 'admin/user_profile';

