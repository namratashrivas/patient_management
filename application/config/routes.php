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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['upload_files'] = 'File_uploadation/upload_files';
$route['insert_treatment'] = 'File_uploadation/insert_treatment';
$route["get_patient"] = "File_uploadation/get_patient";
$route["get_all_data"] = "File_uploadation/get_all_data";
$route["get_all_user_details"] = "Welcome/get_all_user_details";
$route["get_all_travel_details"] = "Welcome/get_all_travel_details";
$route["get_all_testing_details"] = "Welcome/get_all_testing_details";
$route["get_all_symptoms_details"] = "Welcome/get_all_symptoms_details";
$route["get_all_treatment_details"] = "Welcome/get_all_treatment_details";
$route["get_all_other_details"] = "Welcome/get_all_other_details";
$route["change_user_details"] = "Welcome/change_user_details";
$route["change_travel_details"] = "Welcome/change_travel_details2";
$route["change_testing_details"] = "Welcome/change_testing_details";
$route["change_symptoms_details"] = "Welcome/change_symptoms_details";
$route["change_treatment_details"] = "Welcome/change_treatment_details";
$route["change_other_details"] = "Welcome/change_other_details";
$route["update_user_details"] = "Welcome/update_user_details";
$route["update_travel_details"] = "Welcome/update_travel_details";
$route["update_testing_details"] = "Welcome/update_testing_details";
$route["update_symptoms_details"] = "Welcome/update_symptoms_details";
$route["update_treatment_details"] = "Welcome/update_treatment_details";
$route["update_other_details"] = "Welcome/update_other_details";
$route["ExcelFile"] = "ExcelController";
$route["search_patient"] = "File_uploadation/search_patient";




