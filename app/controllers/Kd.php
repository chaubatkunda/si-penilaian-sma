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
    public function add()
    {
        $data = array(
            'title'         => 'Kompetensi Dasar',
            'pelajaran'     => $this->mpelajaran->getAllMapel(),
            'guru'          => $this->guru->getAllGuru(),
            'isi'           => 'kd/add'
        );
        $this->form_validation->set_rules('guru', 'Nama Guru', 'trim|required');
        $this->form_validation->set_rules('mp', 'Mata Pelajaran', 'trim|required');
        $this->form_validation->set_rules('kd', 'Kompetensi Dasar', 'trim|required');
        $this->form_validation->set_rules('ket', 'Kompetensi Dasar', 'trim|required');
        $this->form_validation->set_rules('kds', 'Kompetensi Dasar', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('template/wrap', $data, false);
        } else {
            $data = [
                'guru_id' => $this->input->post('guru', true),
                'mapel_id' => $this->input->post('mp', true),
                'kd' => $this->input->post('kd', true),
                'sub_kd' => $this->input->post('kds', true),
                'ket_kd' => $this->input->post('ket', true)
            ];
            $this->kd->insert_kd($data);
            redirect('kompetensi.dasar');
        }
    }
}
