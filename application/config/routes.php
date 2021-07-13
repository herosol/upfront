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
$route['default_controller'] = 'index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

# FRONT END ROUTES
//PAGES
$route['become-a-model'] = 'pages/become_model';
$route['help']           = 'pages/help';
$route['topic-detail/(:num)'] = 'pages/topic_detail/$1';
$route['cookie-policy']  = 'pages/cookie_policy';
$route['privacy-policy'] = 'pages/privacy_policy';
$route['terms-and-conditions'] = 'pages/terms_and_conditions';
$route['disclaimers']    = 'pages/disclaimers';
$route['affiliates']     = 'pages/affiliates';
$route['contact-us']     = 'pages/contact_us';
$route['about-us']       = 'pages/about_us';
$route['checkout']       = 'pages/checkout';
$route['how-it-works']   = 'pages/how_it_works';
$route['find']           = 'pages/search'; //Search, Find A Model
$route['search']         = 'pages/search'; //Search, Find A Model
$route['educational-videos'] = 'pages/educational_videos'; //Search, Find A Model
$route['model-profile/(:num)'] = 'pages/model_profile/$1'; //Model Profile
# BLOGS PAGES
$route['blog/(:num)']        = 'blog/index/$1';
$route['blog-detail/(:num)'] = 'blog/detail/$1';
# AUTHENTICAION PAGES 
// CLIENT
$route['signin'] = 'index/login'; //user login
$route['signup'] = 'index/register'; //simple user register
$route['verification/(:any)'] = 'index/verification/$1'; //email verification after register
$route['forgot-password']     = 'index/forgot_password'; //forgot password
$route['reset/(:any)']        = 'index/reset/$1';
$route['reset-password']      = 'index/reset_password';
$route['resend-email']        = 'account/resend_email';
//MODEL
$route['signup-as-model']  = 'index/model_signup';
//MEMBERS DASHBOARD
$route['dashboard']        = 'account/dashboard';
$route['profile-settings'] = 'account/profile_settings';
$route['inbox/(:any)']     = 'account/inbox/$1';
$route['inbox']            = 'account/inbox';
$route['bookings']         = 'account/bookings';
$route['booking-detail/(:any)'] = 'account/booking_detail/$1';
$route['toggleChatroom']   = 'account/toggle_chatroom';
$route['download-file/(:any)'] = 'downloadfile/index/$1';

# ADMIN ROUTES
$route['admin/login']   = 'admin/index/login';
$route['admin/logout']  = 'admin/index/logout';