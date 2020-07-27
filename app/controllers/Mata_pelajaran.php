<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mata_pelajaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_login();
    }

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
            'title'     => 'Tambah Mata Pelajaran',
            'kelas'     => $this->admin->getAllKelas(),
            'guru'      => $this->guru->getAllGuru(),
            'isi'       => 'mata_pelajaran/add'
        );
        $this->form_validation->set_rules('guru', 'Guru', 'trim|required');
        $this->form_validation->set_rules('kelas', 'Kelas', 'trim|required');
        $this->form_validation->set_rules('kodemp', 'Kode Pelajaran', 'trim|required|is_unique[t_mapel.kode_mapel]');
        $this->form_validation->set_rules('namamp', 'Mata Pelajaran', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('template/wrap', $data, false);
        } else {
            $detmapel = [
                'guru_id'    => $this->input->post('guru', true),
                'kelas_id'   => $this->input->post('kelas', true),
                'mapel_id'   => $this->input->post('kodemp', true)
            ];
            $datam = [
                'kode_mapel'    => $this->input->post('kodemp', true),
                'nama_mapel'    => $this->input->post('namamp', true)
            ];

            $this->mpelajaran->insert_data($datam);
            $this->mpelajaran->insert_detmapel($detmapel);
            $this->session->set_flashdata('warning', '<div class="alert alert-success" role="alert">
               Data Berhasil Ditambahkan
                </div>');
            redirect('mata.pelajaran');
        }
    }
    public function edit($id)
    {
        $data = array(
            'title'     => 'Edit Mata Pelajaran',
            'mapel'     => $this->mpelajaran->getAllMapelById($id),
            'kelas'     => $this->admin->getAllKelas(),
            'guru'      => $this->guru->getAllGuru(),
            'isi'       => 'mata_pelajaran/edit'
        );
        $this->form_validation->set_rules('kodemp', 'Kode Pelajaran', 'trim|required');
        $this->form_validation->set_rules('namamp', 'Mata Pelajaran', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('template/wrap', $data, false);
        } else {
            $datam = [
                'kode_mapel'    => $this->input->post('kodemp', true),
                'nama_mapel'    => $this->input->post('namamp', true)
            ];
            $this->mpelajaran->update_data($id, $datam);
            redirect('mata.pelajaran');
        }
    }
    public function delete($id)
    {
        $this->mpelajaran->delete_data($id);
        redirect('mata.pelajaran');
    }

    public function detail($id)
    {
        $data = array(
            'title'     => 'Detail Mata Pelajaran',
            'mapel'     => $this->mpelajaran->getAllMapelGuru($id),
            'isi'       => 'mata_pelajaran/detail'
        );
        $this->load->view('template/wrap', $data, false);
    }
}
