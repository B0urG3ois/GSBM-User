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
$route['default_controller'] = 'web';



// *** START ADMINISTRATOR ***
$admin = 'admin';

$route['bengkel/index']				= 'bengkel/index';
$route['bengkel/LO']				= 'bengkel/LO';
$route['bengkel/saring']			= 'bengkel/saring';
$route['bengkel/pengajuan_user']	= 'bengkel/pengajuan_user';

$route['bengkel/tambah_alternatif']			= 'bengkel/tambah_alternatif';
$route['bengkel/hapus_alternatif/(:any)']	= 'bengkel/hapus_alternatif/$i';
$route['bengkel/edit_alternatif/(:any)']	= 'bengkel/edit_alternatif/$1';
$route['bengkel/update_alternatif']			= 'bengkel/update_alternatif';

$route['bengkel/edit_matrix/(:any)']		= 'bengkel/edit_matrix/$1';
$route['bengkel/update_matrix']				= 'bengkel/update_matrix';

$route['bengkel/tambah_kategori_detail']		= 'bengkel/tambah_kategori_detail';
$route['bengkel/hapus_kategori_detail/(:any)']	= 'bengkel/hapus_kategori_detail/$1';
$route['bengkel/edit_kategori_detail/(:any)']	= 'bengkel/edit_kategori_detail/$1';
$route['bengkel/update_kategori_detail']		= 'bengkel/update_kategori_detail';

$route['bengkel/hapus_data_pBengkel/(:any)']	= 'bengkel/hapus_data_pBengkel/$1';
$route['bengkel/tambah_data_pBengkel/(:any)']	= 'bengkel/tambah_data_pBengkel/$1';
$route['bengkel/telahdilihat_data_pLayanan/(:any)']	= 'bengkel/telahdilihat_data_pLayanan/$1';

$route['bengkel/tambah_saringJL']	= 'bengkel/tambah_saringJL';
$route['bengkel/hapus_saringJL/(:any)']	= 'bengkel/hapus_saringJL/$1';
$route['bengkel/edit_saringJL/(:any)']	= 'bengkel/edit_saringJL/$1';
$route['bengkel/update_saringJL']	= 'bengkel/update_saringJL';

$route['bengkel/tambah_saringJO']	= 'bengkel/tambah_saringJO';
$route['bengkel/hapus_saringJO/(:any)']	= 'bengkel/hapus_saringJO/$1';
$route['bengkel/edit_saringJO/(:any)']	= 'bengkel/edit_saringJO/$1';
$route['bengkel/update_saringJO']	= 'bengkel/update_saringJO';

$route['bengkel/tambah_saringMM']	= 'bengkel/tambah_saringMM';
$route['bengkel/hapus_saringMM/(:any)']	= 'bengkel/hapus_saringMM/$1';
$route['bengkel/edit_saringMM/(:any)']	= 'bengkel/edit_saringMM/$1';
$route['bengkel/update_saringMM']	= 'bengkel/update_saringMM';

$route['bengkel/tambah_saringTM']	= 'bengkel/tambah_saringTM';
$route['bengkel/hapus_saringTM/(:any)']	= 'bengkel/hapus_saringTM/$1';
$route['bengkel/edit_saringTM/(:any)']	= 'bengkel/edit_saringTM/$1';
$route['bengkel/update_saringTM']	= 'bengkel/update_saringTM';

$route['bengkel/tambah_saringMO']	= 'bengkel/tambah_saringMO';
$route['bengkel/hapus_saringMO/(:any)']	= 'bengkel/hapus_saringMO/$1';
$route['bengkel/edit_saringMO/(:any)']	= 'bengkel/edit_saringMO/$1';
$route['bengkel/update_saringMO']	= 'bengkel/update_saringMO';


// START SESSION
// $route['bengkel']					= 'web/bengkel';
$route[$admin.'/login'] 			= 'admin/login';
$route[$admin.'/action_login'] 		= 'admin/action_login';
$route[$admin.'/logout'] 			= 'admin/logout';
// END SESSION

// *** END ADMINISTRATOR ***

// *** START HOME PAGE ***
$route['beranda']					= 'web/index';
$route['bantuan']					= 'web/bantuan';
$route['tentang_kami']				= 'web/about';
$route['pengajuan_bengkel']			= 'web/pengajuan_bengkel';

$route['katalog/all/(:any)']			= 'web/katalog';
$route['katalog/all/(:any)/(:any)']		= 'web/katalog';

$route['katalog/kategori/(:any)']	= 'web/katalog_per_kategori';
$route['katalog/kategori/(:any)/(:any)']		= 'web/katalog_per_kategori';
$route['katalog/kategori/(:any)/(:any)/(:any)']	= 'web/katalog_per_kategori';

$route['katalog/detail/(:any)']		= 'web/detail_katalog';

// $route['bengkel']					= 'web/bengkel';
$route['bengkel/(:any)']				= 'web/detail_bengkel';
$route['bengkel/(:any)/(:any)']			= 'web/detail_bengkel';
$route['bengkel/(:any)/(:any)/(:any)']	= 'web/detail_bengkel';

$route['action_subscribe']			= 'web/action_subscribe';

$route['bengkel_terdekat']			= 'web/bengkel_terdekat';
$route['bengkel_terdekat/(:any)']	= 'web/bengkel_terdekat';

$route['search/(:any)']					= 'web/search';
$route['search/(:any)/(:any)']			= 'web/search';
$route['search/(:any)/(:any)/(:num)']	= 'web/search';

$route['search/kategori/(:any)/(:any)']					= 'web/search_kategori';
$route['search/kategori/(:any)/(:any)/(:any)']			= 'web/search_kategori';
$route['search/kategori/(:any)/(:any)/(:any)/(:num)']	= 'web/search_kategori';

// $route['search_kategori/(:any)/(:any/(:any)']			= 'web/search_kategori';
// $route['search_kategori/(:any)/(:any/(:any)/(:any)']	= 'web/search_kategori';


$route['send_subscribe'] = 'web/getfollow';

$route['filter'] = 'web/filter';


$route['pengajuan']					= 'pengajuan/index';
$route['regis']	                    = 'pengajuan/regis_user';
$route['login']                 	= 'pengajuan/login_user';
$route['after_login']             = 'pengajuan/beranda_akun';
$route['logout']	                = 'pengajuan/logout';
$route['tambah_bengkel']	        = 'pengajuan/tambah_bengkel';



$route['pengajuan_LO']				= 'pengajuan_LO/index';
$route['tambah_layanan']	        = 'pengajuan_LO/tambah_layanan';
$route['tambah_onderdil']	        = 'pengajuan_LO/tambah_onderdil';
$route['tambah_layanan_view']	    = 'pengajuan_LO/tambah_layanan_view';
$route['tambah_onderdil_view']	    = 'pengajuan_LO/tambah_onderdil_view';


// $route['404_override'] 		= 'web/not_found';
$route['404_override'] 		= '';

$route['page_not_found']	= 'web/page_404';
$route['translate_uri_dashes'] = FALSE;
