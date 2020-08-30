<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nilai extends CI_Controller
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
            'isi'       => 'nilai/home'
        );
        $this->load->view('template/wrap', $data, false);
    }
    public function guru_nilai()
    {
        // $guru = $this->waka->guruPelajaranDet();
        // var_dump($guru);
        // die;
        $data = array(
            'title'     => 'Guru Nilai',
            'nilai'     => $this->waka->guruPelajaranDet(),
            'isi'       => 'guru/nilai'
        );
        // var_dump($data['nilai']);
        // die;
        $this->load->view('template/wrap', $data, false);
    }
    public function waka_nilai()
    {
        $data = array(
            'title'     => 'Waka Nilai',
            'nilai'     => $this->waka->guruPelajaran(),
            'isi'       => 'guru/nilai'
        );
        $this->load->view('template/wrap', $data, false);
    }
    public function detail_siswa($id)
    {
        $kode = $this->input->get('mapel', true);
        $data = array(
            'title'     => 'Nilai Siswa',
            'nilai'     => $this->nilai->getAllNilaiSIswa($id),
            'kd'         => $this->kd->getAllKdByIdd($kode),
            'mapel'     => $kode,
            'isi'       => 'guru/detail_siswa'
        );
        $this->load->view('template/wrap', $data, false);
    }
    public function nilai_siswa($id)
    {
        $nis = $this->input->get('siswa', true);
        $kelas = $this->input->get('kelas', true);
        $ajaran = $this->input->get('ajaran_kode', true);

        $data = array(
            'title'     => 'Penilaian Siswa',
            'mapel'     => $id,
            'siswa'     => $nis,
            'kelas'     => $kelas,
            'tahun'     => $ajaran,

            'kd'         => $this->kd->getAllKdById($id),
            'isi'       => 'guru/nilai_siswa'
        );
        $this->load->view('template/wrap', $data, false);
    }
    public function kelas($id)
    {
        // $nis = $this->input->get('siswa', true);
        // $kelas = $this->input->get('kelas', true);
        $kode = $this->input->get('mapel', true);
        $kd        = $this->kd->getAllKdByIdd($kode);

        // $tahun = $this->input->post('tahun', true);
        // if ($tahun) {
        //     $kelasn = $this->nilai->detailKelas($id, $tahun);
        // } else {
        //     $kelasn = [];
        // }

        $data = array(
            'title'     => 'Nilai Kelas ' . $id,
            // 'kelas' => $kelas,
            'nilai'     => $this->nilai->detailKelas($id),
            'kode'      => $id,
            'mapel'     => $kode,
            // 'tahun'     => $this->tahun->getAllTahunAjaran(),
            'kd'        => $kd,
            'isi'       => 'guru/nilai_kelas'
        );
        // var_dump($data['mapel']);
        // die;
        $this->load->view('template/wrap', $data, false);
    }
    public function tambah_nilai($id)
    {
        // $this->nilai->insert_nilai($id);
        // redirect('guru/nilai');
        $siswa = $this->input->get('siswa', true);
        $mapel = $this->input->get('mapel', true);
        $kelas = $this->input->get('kelas', true);
        $ajaran = $this->input->get('ajaran', true);
        // var_dump($kelas);
        // die;
        $data = array(
            'title'     => 'Tambah Nilai',
            'kd'        => $this->nilai->getDetailKd($id),
            'siswa'     => $this->nilai->getKelasSiswa($siswa, $kelas),
            'ajaran'    => $this->nilai->detailTahunAjaran($ajaran),
            'mapel'     => $this->nilai->getDetailMapel($mapel),
            'isi'       => 'guru/add_nilai'
        );
        $this->load->view('template/wrap', $data, false);
    }
}
