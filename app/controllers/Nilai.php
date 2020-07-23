<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nilai extends CI_Controller
{

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
        $data = array(
            'title'     => 'Nilai',
            'nilai'     => $this->user->guruPelajaran(),
            'isi'       => 'guru/nilai'
        );
        $this->load->view('template/wrap', $data, false);
    }
}
