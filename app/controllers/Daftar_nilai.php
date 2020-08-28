<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daftar_nilai extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    is_login();
  }

  public function index()
  {
    $data = array(
      'title'     => 'Nilai',
      'nilai'     => $this->nilai->getAllNilai(),
      'tahun'     => $this->tahun->getAllTahunAjaran(),
      'kelas' => $this->kelas->getAllKelas(),
      'isi'       => 'daftar_nilai/daftar'
    );
    $this->load->view('template/wrap', $data, false);
  }
  public function kelas($id)
  {
    if ($id == 'X01' || $id == 'X02') {
      $view_kelas = 'daftar_nilai/kelas_x';
      $nilai = $this->daftar->getAllNilaiKelasX($id);
    } elseif ($id == 'XI01' || $id == 'XI02') {
      $nilai = $this->daftar->getAllNilaiKelasXI($id);
      $view_kelas = 'daftar_nilai/kelas_xi';
    } elseif ($id == 'XII01' || $id == 'XII02') {
      $nilai = $this->daftar->getAllNilaiKelasXII($id);
      $view_kelas = 'daftar_nilai/kelas_xii';
    }

    $data = array(
      'title'     => 'Nilai',
      'nilai'     => $nilai,
      // 'tahun'     => $this->tahun->getAllTahunAjaran(),
      // 'kelas'       => $kelas,
      'isi'       => $view_kelas
    );
    $this->load->view('template/wrap', $data, false);
  }
}
