<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Routing
$route['auth/register'] = "Auth/signup";
$route['auth/login'] = 'Auth/signin';
$route['dashboard/home'] = 'Dashboard/index';
$route['dashboard/home_main'] = 'Dashboard/index_main';
$route['dashboard/token_check'] = 'Auth/token_check';
// CRUD for register
$route['auth/signup'] = 'Auth/actionRegister';

// Profile exchange
$route['profile/exchange'] = 'Profile/exchange';
$route['profile/passowrd_new'] = 'Profile/password';
$route['profile/imageChange'] = 'Profile/imageChange';

// CRUD for login
$route['auth/signin'] = 'Auth/doLogin';
$route['auth/signout'] = 'Dashboard/doSignout';

// Video page to display videos with id number 1
$route['secure/video_1'] = 'Dashboard/videoDisplay_1';

// Video page to display videos with id number 2
$route['secure/video_2'] = 'Dashboard/videoDisplay_2';

// Video page to display videos with id number 3
$route['secure/video_3'] = 'Dashboard/videoDisplay_3';

// Video page to display videos with id number 4
$route['secure/video_4'] = 'Dashboard/videoDisplay_4';

// Video page to display videos with id number 5
$route['secure/video_5'] = 'Dashboard/videoDisplay_5';

// Video page to display videos with id number 6
$route['secure/video_6'] = 'Dashboard/videoDisplay_6';

// Video page to display videos with id number 7
$route['secure/video_7'] = 'Dashboard/videoDisplay_7';

// Price Plan User priority Free 
$route['price_plan/free'] = 'Dashboard/priceUserSelect_free';

// Price Plan User priority Premium
$route['price_plan/premium'] = 'Dashboard/priceUserSelect_premium';

// Price Plan User priority Cinematic
$route['price_plan/cinematic'] = 'Dashboard/priceUserSelect_cinematic';

$route['catalog/grid'] = 'Dashboard/catalog1';
$route['catalog/list'] = 'Dashboard/catalog2';

$route['catalog/contact'] = 'Dashboard/contact';
$route['catalog/about'] = 'Dashboard/about';

$route['error/404'] = 'Dashboard/error';
$route['catalog/details_1'] = 'Dashboard/detail_1';

$route['catalog/details_2'] = 'Dashboard/detail_2';
$route['faq'] = 'Dashboard/faq';

$route['forgotPassword'] = 'Dashboard/forgotPassword';
$route['dashboard/pricing'] = 'Dashboard/pricing';

$route['dashboard/privacy'] = 'Dashboard/privacy';
$route['dashboard/profile'] = 'Dashboard/profile';

$route['admin/signup'] = 'Admin/signup';
$route['admin/login'] = 'Admin/login';

$route['default_controller'] = 'welcome';
$route['404_override'] = 'Dashboard/error';
$route['translate_uri_dashes'] = FALSE;

