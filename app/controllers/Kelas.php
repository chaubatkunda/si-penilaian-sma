<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_login();
    }


    public function index()
    {
        $data = array(
            'title' => 'Data Kelas',
            'kelas' => $this->kelas->getAllKelas(),
            'isi'   => 'kelas/home'
        );
        $this->load->view('template/wrap', $data, false);
    }
    public function addkelas()
    {
        $data = array(
            'title'     => 'Add Kelas',
            'kelas'     => $this->kelas->getAllKelas(),
            'pil_kelas' => $this->kelas->getAllKelas(),
            'isi'       => 'kelas/add'
        );
        $this->form_validation->set_rules('kode_kls', 'Kode Kelas', 'required|trim');
        $this->form_validation->set_rules('kelas', 'Kelas', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/wrap', $data, false);
        } else {
            $this->kelas->simpanKelas();
            redirect('kelas');
        }
    }
    public function hapuskelas($id)
    {
        $this->guru->hapusKelas($id);
        $this->session->set_flashdata('warning', '<div class="alert alert-success" role="alert">
                    Berhasil Menghapus Data
                    </div>');
        redirect('kelas');
    }
    public function detail_kelas($id)
    {
        $data = array(
            'title' => 'Detail Kelas ' . $id,
            'kelas' => $this->kelas->detailKelas($id),
            'kode'  => $id,
            'isi'   => 'kelas/detail_kelas'
        );
        $this->load->view('template/wrap', $data, false);
    }
    public function adddetailkelas($id)
    {
        $data = array(
            'title' => 'Detail Kelas ' . $id,
            'kode' => $id,
            'siswa' => $this->siswa->getAllSiswa(),
            'isi'   => 'kelas/add_detail_kelas'
        );
        $this->form_validation->set_rules('siswa', 'Siswa', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('template/wrap', $data, false);
        } else {
            $data = [
                'kelas_id'  => $id,
                'siswa_id'  => $this->input->post('siswa', true)
            ];
            $this->kelas->insert_detail_kelas($data);
            $this->session->set_flashdata('warning', '<div class="alert alert-success" role="alert">
                    Berhasil Menghapus Data
                    </div>');
            redirect('detail_kelas/' . $id);
        }
    }

    public function hapus_detail_kelas($id)
    {
        $kode = $this->input->get('kode', true);
        $this->db->delete('t_detail_kelas', ['id' => $id]);
        $this->session->set_flashdata('warning', '<div class="alert alert-success" role="alert">
                    Berhasil Menghapus Data
                    </div>');
        redirect('detail_kelas/' . $kode);
    }
}
