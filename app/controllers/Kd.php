<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kd extends CI_Controller
{

    public function index()
    {
        $data = array(
            'title' => 'Kompetensi Dasar',
            'kd'    => $this->kd->getAllKd(),
            'isi'   => 'kd/home'
        );
        $this->load->view('template/wrap', $data, false);
    }
}
