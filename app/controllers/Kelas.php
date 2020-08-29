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
        $tahun = $this->input->post('tahun', true);

        $data = array(
            'title' => 'Kelas ' . $id,
            'kelas' => $this->kelas->detailKelas($id),
            'kode'  => $id,
            'ajaran'    => $tahun,
            'isi'   => 'kelas/detail_kelas'
        );
        $this->load->view('template/wrap', $data, false);
    }
    public function naik_kelas($id)
    {
        $kode = $this->input->get('kode', true);
        $siswa = $this->kelas->naikKelas($id);
        $data = array(
            'title' => 'Kelas ' . $siswa->kelas_id,
            'kode' => $siswa->kelas_id,
            'siswa' => $siswa,
            'kelas' => $this->kelas->getAllKelas(),
            'thn_ajaran'    => $this->kelas->tahunAjaran($kode),
            'isi'   => 'kelas/add_detail_kelas'
        );


        $this->form_validation->set_rules('siswa', 'Siswa', 'trim|required');
        $this->form_validation->set_rules('kelas', 'Kelas', 'trim|required');
        $this->form_validation->set_rules('tahun', 'Tahun', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('template/wrap', $data, false);
        } else {
            $data = [
                'kelas_id'  => $id,
                'siswa_id'  => $this->input->post('siswa', true),
                'tahun_ajaran_id'  => $this->input->post('tahun', true)
            ];
            $this->kelas->insert_detail_kelas($data);
            $this->kelas->update_naik($id);
            $this->session->set_flashdata('warning', '<div class="alert alert-success" role="alert">
                        Berhasil Menambahkan Data
                        </div>');
            redirect('kelas/' . $siswa->kelas_id);
        }
    }

    public function hapus_detail_kelas($id)
    {
        $kode = $this->input->get('kode', true);
        $this->kelas->delete_detail_kelas($id);
        $this->session->set_flashdata('warning', '<div class="alert alert-success" role="alert">
                    Berhasil Menghapus Data
                    </div>');
        redirect('kelas/' . $kode);
    }

    // Nail Kelas
    public function siswa_baru($id)
    {
        $data = array(
            'title' => 'Data Kelas',
            'kelas' => $this->kelas->getAllKelas(),
            'isi'   => 'kelas/siswa_baru'
        );
        $this->load->view('template/wrap', $data, false);
    }
}
