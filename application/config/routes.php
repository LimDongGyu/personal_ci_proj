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
// $route['default_controller']      = 'welcome';
//$route['default_controller']      = 'bootgrid';
$route['default_controller']        = 'main/board';
$route['welcome']                   = 'welcome';
$route['404_override']              = '';
$route['translate_uri_dashes']      = FALSE;

$route['login']                     = 'main/login';         //login page
// $route['fb_login']               = 'main/fb_login';   //fb login 차후 진행
$route['register']                  = 'main/register';      //user sign up page
$route['info']                      = 'main/info';
$route['write']                     = 'main/write';
$route['edit/(:num)']               = 'main/edit/$1';
$route['post/(:num)']               = "main/post/$1";


$route['android']                   = 'android/page';

$route['template']                 = 'template';
$route['template/create']          = 'template/create';

//DB process
$route['/process/login']            = 'process/login';
$route['/process/logout']           = 'process/logout';
$route['/process/register']         = 'process/register';
$route['/process/withdrawal']       = 'process/withdrawal';
$route['/process/write']            = 'process/write';
$route['/process/edit']             = 'process/edit';
$route['/process/delete/(:num)']    = 'process/delete/$1';
$route['/process/comment_write']    = 'process/comment_write';
$route['/process/comment_delete/(:num)']   = 'process/comment_delete/$1';

//crud
$route['/crud']                     = 'crud';

//calendar
$route['/calendar']                 = 'calendar';

//test
$route['/test']                     = 'test';
$route['/test/postTest']            = 'test/postTest';


//chatbot
$route['/chatbot']                      = 'chatbot';
$route['/chatbot/custInfoCollection']   = 'chatbot/custInfoCollection';