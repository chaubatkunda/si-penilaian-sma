<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
$route['default_controller'] = 'auth';

$route['dashboard']     = 'admin';
$route['user']          = 'user';
$route['add-user']      = 'user/addakun';
$route['logout']        = 'auth/logout';

// !Siswa
$route['siswa']             = 'siswa';
$route['add-siswa']         = 'siswa/addsiswa';
$route['detsiswa/(:num)']   = 'siswa/detailsiswa/$1';
$route['editsiswa/(:num)']  = 'siswa/edit/$1';
$route['hapus.siswa/(:num)']  = 'siswa/delete/$1';

// !Guru
$route['guru']          = 'admin/guru';
$route['add-guru']      = 'admin/addguru';

// !Kelas
$route['kelas']         = 'admin/kelas';
$route['add-kelas']     = 'admin/addkelas';

// !Kd
$route['kompetensi.dasar']  = 'kd';

// !Nilai
$route['nilai']     = 'nilai';

// !Mata Pelajaran
$route['mata.pelajaran']        = 'mata_pelajaran';
$route['add.mapel']             = 'mata_pelajaran/add';
$route['edit.mapel/(:num)']     = 'mata_pelajaran/edit/$1';
$route['hapus.mapel/(:num)']     = 'mata_pelajaran/delete/$1';

// !Waka
$route['waka.kurikulum']        = 'waka';
$route['add.waka']              = 'waka/add';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
