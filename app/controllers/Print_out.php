<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Print_out extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_login();
    }
    public function guru()
    {
        $title =  'Cetak Guru';
        // $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [100, 100]]);
        $mpdf = new \Mpdf\Mpdf(['orientation' => 'P']);
        $data = $this->load->view('print_out/print_guru', [
            'title' => $title,
            'guru'  => $this->guru->getAllGuru()
        ], TRUE);
        $mpdf->WriteHTML($data);
        // $mpdf->AutoPrint(true);
        $mpdf->Output();
    }
    public function siswa()
    {
        $title =  'Cetak Siswa';
        // $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [100, 100]]);
        $mpdf = new \Mpdf\Mpdf(['orientation' => 'P']);
        $data = $this->load->view('print_out/print_siswa', [
            'title' => $title,
            'siswa' => $this->siswa->getAllSiswa(),
        ], TRUE);
        $mpdf->WriteHTML($data);
        // $mpdf->AutoPrint(true);
        $mpdf->Output();
    }
    public function kelas_x($id)
    {
        $title =  'Cetak Siswa ' . $id;
        // $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [100, 100]]);
        $mpdf = new \Mpdf\Mpdf(['orientation' => 'P']);
        $data = $this->load->view('print_out/print_siswa', [
            'title' => $title,
            'siswa' => $this->cetak->getAllKategoryKelas($id),
        ], TRUE);
        $mpdf->WriteHTML($data);
        // $mpdf->AutoPrint(true);
        $mpdf->Output();
    }

    public function nilai($id)
    {
        $kode = $this->input->get('kode', true);
        $title =  'Cetak Nilai';
        // $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [100, 100]]);
        $mpdf = new \Mpdf\Mpdf(['orientation' => 'P']);
        $data = $this->load->view('print_out/print_nilai', [
            'title' => $title,
            'nilai' => $this->cetak->getAllNilai($id),
            'kode'  => $kode,
            'guru'  => $this->cetak->guruMapel($kode)
        ], TRUE);
        $mpdf->WriteHTML($data);
        // $mpdf->AutoPrint(true);
        $mpdf->Output();
    }

    public function cetak_nilai($id)
    {
        $kode = $this->input->get('kode', true);
        $data = array(
            'title'     => 'Detail Nilai',
            'nilai' => $this->cetak->getAllNilai($id),
            'kode'  => $kode,
            'guru'  => $this->cetak->guruMapel($kode),
            'isi'       => 'print_out/detail_cetak_nilai'
        );
        // var_dump($data['nilai']);
        // die;
        $this->load->view('template/wrap', $data, false);
    }
}
