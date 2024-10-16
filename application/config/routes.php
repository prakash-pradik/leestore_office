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

/**** Store Manage ****/
$route['stores'] = 'stores/stores_list';

/**** Admin Manage ****/
$route['staffs_list'] = 'staffs/staffs_list';
$route['roles_list'] = 'staffs/roles_list';
$route['insert_role'] = 'staffs/insert_role';
$route['update_role'] = 'staffs/update_role';

/**** Customers Manage ****/
$route['suppliers'] = 'suppliers/suppliers_list';
$route['supplier/(:any)'] = 'suppliers/supplier_details/$1';

/**** Customers Manage ****/
$route['customers'] = 'customers/customers';
$route['customer/(:any)'] = 'customers/customer_details/$1';

/**** Products Manage ****/
$route['categories'] = 'products/categories';
$route['insert_category'] = 'products/insert_category';
$route['update_category'] = 'products/update_category';

$route['brands'] = 'products/brands';
$route['insert_brand'] = 'products/insert_brand';
$route['update_brand'] = 'products/update_brand';

$route['products_list'] = 'products/products_list';
$route['product_create'] = 'products/product_create';
$route['product_update/(:any)'] = 'products/product_update/$1';
$route['product_view/(:any)'] = 'products/product_view/$1';

$route['godown'] = 'products/godown';
$route['insert_stock'] = 'products/insert_stock';
/**** End Products Manage ****/

/**** Sales Manage ****/
$route['sales_list/(:any)'] = 'sales/sales_list/$1';
$route['sales_draft/(:any)'] = 'sales/sales_draft/$1';
$route['invoice/(:any)'] = 'sales/invoice/$1';
$route['invoice_pdf/(:any)'] = 'sales/invoice_pdf/$1';
$route['payments'] = 'payments/pos_create';
$route['pos_create'] = 'payments/pos_create';
$route['pos_update/(:any)'] = 'payments/pos_update/$1';
/**** End Sales Manage ****/

$route['print_test'] = 'admin/print_test';