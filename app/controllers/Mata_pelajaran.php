<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mata_pelajaran extends CI_Controller
{

    public function index()
    {
        $data = array(
            'title'     => 'Mata Pelajaran',
            'mapel'     => $this->mpelajaran->getAllMapel(),
            'isi'       => 'mata_pelajaran/home'
        );
        $this->load->view('template/wrap', $data, false);
    }
    public function add()
    {
        $data = array(
            'title'     => 'Mata Pelajaran',
            'mapel'     => $this->mpelajaran->getAllMapel(),
            'isi'       => 'mata_pelajaran/add'
        );
        $this->form_validation->set_rules('kodemp', 'Kode Pelajaran', 'trim|required|is_unique[t_mapel.kode_mapel]');
        $this->form_validation->set_rules('namamp', 'Mata Pelajaran', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('template/wrap', $data, false);
        } else {
            $datam = [
                'kode_mapel'    => $this->input->post('kodemp', true),
                'nama_mapel'    => $this->input->post('namamp', true)
            ];
            $this->mpelajaran->insert_data($datam);
            redirect('mata.pelajaran');
        }
    }
}