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
        if ($tahun) {
            $kelas = $this->kelas->detailKelas($id, $tahun);
        } else {
            $kelas = [];
        }
        $data = array(
            'title' => 'Kelas ' . $id,
            'kelas' => $kelas,
            'tahun' => $this->tahun->getAllTahunAjaran(),
            'kode'  => $id,
            'isi'   => 'kelas/detail_kelas'
        );
        $this->load->view('template/wrap', $data, false);
    }
    public function adddetailkelas($id)
    {
        // if ($id == 'X01' || $id == 'X02') {
        //     $siswa = $this->kelas->getAllSiswaBaru();
        //     $view_kelas = 'kelas/add_detail_kelas_x';
        // } elseif ($id == 'XI01' || $id == 'XI02') {
        //     $siswa = $this->kelas->getAllSiswaSebelas();
        //     $view_kelas = 'kelas/add_detail_kelas_xi';
        // } elseif ($id == 'XII01' || $id == 'XII02') {
        //     $siswa = $this->kelas->getAllSiswaDuaBelas();
        //     $view_kelas = 'kelas/add_detail_kelas_xii';
        // }

        $data = array(
            'title' => 'Kelas ' . $id,
            'kode' => $id,
            'siswa' => $this->kelas->getAllSiswa(),
            'tahun'     => $this->tahun->getAllTahunAjaran(),
            'isi'   => 'kelas/add_detail_kelas'
        );
        $this->form_validation->set_rules('siswa', 'Siswa', 'trim|required');
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
            $this->session->set_flashdata('warning', '<div class="alert alert-success" role="alert">
                        Berhasil Menghapus Data
                        </div>');
            redirect('kelas/' . $id);
        }
    }

    public function hapus_detail_kelas($id)
    {
        $kode = $this->input->get('kode', true);
        $siswa = $this->input->get('siswa', true);

        $data = [
            'chek_siswa'    => 1
        ];
        $this->db->update('t_siswa', $data, ['nis' => $siswa]);
        $this->db->delete('t_detail_kelas_x', ['id' => $id]);


        $this->session->set_flashdata('warning', '<div class="alert alert-success" role="alert">
                    Berhasil Menghapus Data
                    </div>');
        redirect('kelas/' . $kode);
    }
}
