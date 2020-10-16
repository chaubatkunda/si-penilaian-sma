<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HistoriGuru extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_login();
    }

    public function index()
    {
        $data = array(
            'title' => 'Histori Guru',
            'guru'  =>  $this->guru->getAllGuru(),
            'isi'   => 'histori_guru/home'
        );
        $this->load->view('template/wrap', $data, false);
    }
    public function show($id)
    {
        $data = array(
            'title' => 'Histori Guru',
            'guru'  =>  $this->historiGuru->guruHistori($id),
            'isi'   => 'histori_guru/detail'
        );
        $this->load->view('template/wrap', $data, false);
    }
}
