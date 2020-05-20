<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Waka extends CI_Controller
{


    public function index()
    {
        $data = array(
            'title'     => 'Waka Kurikulum',
            'waka'      => $this->waka->getAllwaka(),
            'isi'       => 'waka/home'
        );
        $this->load->view('template/wrap', $data, false);
    }
    public function add()
    {
        $data = array(
            'title'     => 'Add Waka Kurikulum',
            'waka'      => $this->guru->getAllGuru(),
            'mapel'     => $this->mpelajaran->getAllMapel(),
            'isi'       => 'waka/add'
        );
        $this->form_validation->set_rules('nama_waka', 'Nama Waka', 'required|trim');
        $this->form_validation->set_rules('id_mapel', 'id_mapel', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('template/wrap', $data, false);
        } else {
            $dataw = [
                'mapel_id'  => $this->input->post('id_mapel', true),
                'guru_id'   => $this->input->post('nama_waka', true),
            ];
            $this->waka->insert_waka($dataw);
            redirect('waka.kurikulum');
        }
    }
}
