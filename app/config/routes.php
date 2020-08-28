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

$route['dashboard']             = 'guru';
$route['user/guru']             = 'guru';
$route['user']                  = 'user';
$route['user/hapus/(:num)']     = 'user/delete/$1';

$route['add-user']              = 'user/addakun';
$route['edit_profil/(:num)']    = 'user/editprofil/$1';
$route['logout']                = 'auth/logout';

// !Siswa
$route['siswa']                     = 'siswa';
$route['add-siswa']                 = 'siswa/addsiswa';
$route['detsiswa/(:num)']           = 'siswa/detailsiswa/$1';
$route['editsiswa/(:num)']          = 'siswa/edit/$1';
$route['hapus.siswa/(:num)']        = 'siswa/delete/$1';

// !Guru
$route['guru']                  = 'guru/guru';
$route['add-guru']              = 'guru/addguru';
$route['detail-guru/(:num)']    = 'guru/detail/$1';
$route['edit-guru/(:num)']      = 'guru/edit/$1';
$route['hapus-guru/(:num)']     = 'guru/hapus/$1';

// !Kelas
$route['kelas']                  = 'kelas';
$route['add-kelas']              = 'kelas/addkelas';
$route['hapus-kelas/(:num)']     = 'kelas/hapuskelas/$1';

$route['add_kelas/(:any)']       = 'kelas/adddetailkelas/$1';
$route['kelas/(:any)']    = 'kelas/detail_kelas/$1';
$route['hapus-detail-kelas/(:num)']    = 'kelas/hapus_detail_kelas/$1';

// !Kd
$route['kompetensi.dasar']          = 'kd';
$route['add-kd/(:any)']             = 'kd/add/$1';
$route['detail-kd/(:any)']          = 'kd/detail/$1';
$route['edit-kd/(:num)']            = 'kd/edit/$1';
$route['hapus-kd/(:num)']           = 'kd/delete/$1';
$route['tambah-detai-kd/(:any)']    = 'kd/detailkd/$1';

// !Nilai
$route['nilai']             = 'nilai';
$route['guru/nilai']        = 'nilai/guru_nilai';
$route['nilai/kelas(:any)']       = 'nilai/kelas/$1';

$route['guru/nilai/siswa/(:any)']     = 'nilai/detail_siswa/$1';
$route['guru/nilai_siswa/(:any)']     = 'nilai/nilai_siswa/$1';

// !Mata Pelajaran
$route['mata.pelajaran']        = 'mata_pelajaran';
$route['add.mapel']             = 'mata_pelajaran/add';
$route['edit.mapel/(:any)']     = 'mata_pelajaran/edit/$1';
$route['hapus.mapel/(:num)']    = 'mata_pelajaran/delete/$1';
$route['detail.mapel/(:any)']   = 'mata_pelajaran/detail/$1';

// !Waka
$route['user/waka']             = 'waka';
$route['waka.kurikulum']        = 'waka/home';
$route['add.waka']              = 'waka/add';
$route['hapus-waka/(:num)']     = 'waka/hapus/$1';

$route['waka/nilai']        = 'nilai/waka_nilai';

$route['tata_usaha']                        = 'tu';
$route['add_tu']                            = 'tu/add';
$route['edit_tata_usaha/(:num)']            = 'tu/edit/$1';
$route['detail_tata_usaha/(:num)']          = 'tu/detail/$1';
$route['hapus_tata_usaha/(:num)']           = 'tu/hapus/$1';

// Tahun Ajaran
$route['tahun_ajaran']      = 'tahun_ajaran';
$route['add_tahun_ajaran']      = 'tahun_ajaran/add';
$route['edit_tahun_ajaran/(:num)']      = 'tahun_ajaran/edit/$1';
$route['delete_tahun_ajaran/(:num)']      = 'tahun_ajaran/delete/$1';


// Print Out
$route['cetak_guru']    = 'print_out/guru';
$route['cetak_siswa']   = 'print_out/siswa';
$route['print_out/siswa/kelas/(:any)']   = 'print_out/kelas_x/$1';
$route['print_out/nilai_siswa/(:any)']   = 'print_out/nilai/$1';
$route['print_out/cetak_siswa/(:any)']   = 'print_out/cetak_nilai/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
