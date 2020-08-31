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
  public function nilai($id)
  {
    $kode = $this->input->get('kode', true);
    $mapel = $this->input->get('mapel', true);
    $data = array(
      'title'     => 'Nilai',
      'nilai'     => $this->daftar->getAllNilaiKelas($kode, $id),
      'mapel'     => $this->mpelajaran->getAllMapelById($id),
      // 'kelas'       => $kelas,
      'kode'      => $kode,
      'mapel_kode'   => $mapel,
      // 'nilai'     => $this->daftar->getAllNilai($id, $kode),
      'isi'       => 'daftar_nilai/kelas'
    );
    $this->load->view('template/wrap', $data, false);
  }

  public function mapel($id)
  {
    $kode = $this->input->get('kode', true);

    $data = array(
      'title'     => 'Mata Pelajaran',
      'mapel'     => $this->daftar->getMapel($id),
      'kode'    => $kode,

      'isi'       => 'daftar_nilai/mapel'
    );

    $this->load->view('template/wrap', $data, false);
  }

  // public function nilai()
  // {
  //   //
  // }
}
