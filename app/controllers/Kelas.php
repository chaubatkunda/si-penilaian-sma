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
        if ($id == 'X01' || $id == 'X02') {
            $view_kelas = 'kelas/detail_kelas_x';
            $kelas = $this->kelas->detailKelasX($id);
        } elseif ($id == 'XI01' || $id == 'XI02') {
            $kelas = $this->kelas->detailKelasXI($id);
            $view_kelas = 'kelas/detail_kelas_xi';
        } elseif ($id == 'XII01' || $id == 'XII02') {
            $kelas = $this->kelas->detailKelasXII($id);
            $view_kelas = 'kelas/detail_kelas_xii';
        }
        $data = array(
            'title' => 'Detail Kelas ' . $id,
            'kelas' => $kelas,
            'kode'  => $id,
            'isi'   => $view_kelas
        );
        $this->load->view('template/wrap', $data, false);
    }
    public function adddetailkelas($id)
    {
        if ($id == 'X01' || $id == 'X02') {
            $siswa = $this->kelas->getAllSiswaBaru();
            $view_kelas = 'kelas/add_detail_kelas_x';
        } elseif ($id == 'XI01' || $id == 'XI01') {
            $siswa = $this->kelas->getAllSiswaSebelas();
            $view_kelas = 'kelas/add_detail_kelas_xi';
        } elseif ($id == 'XII01' || $id == 'XII01') {
            $siswa = $this->kelas->getAllSiswaDuaBelas();
            $view_kelas = 'kelas/add_detail_kelas_xii';
        }

        $data = array(
            'title' => 'Detail Kelas ' . $id,
            'kode' => $id,
            'siswa' => $siswa,
            'isi'   => $view_kelas
        );
        $this->form_validation->set_rules('siswa', 'Siswa', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('template/wrap', $data, false);
        } else {
            if ($id == 'X01' || $id == 'X02') {
                $kode_siswa = $this->input->post('siswa', true);
                $data = [
                    'kelas_id'  => $id,
                    'siswa_id'  => $kode_siswa,
                    'siswa_chek'    => 1
                ];
                $this->kelas->insert_detail_kelasx($data);
                $this->kelas->updateSiswaBaru($kode_siswa);
                $this->session->set_flashdata('warning', '<div class="alert alert-success" role="alert">
                        Berhasil Menghapus Data
                        </div>');
                redirect('kelas/' . $id);
            } elseif ($id == 'XI01' || $id == 'XI01') {
                $kode_siswa = $this->input->post('siswa', true);
                $data = [
                    'kelas_id'  => $id,
                    'siswa_id'  => $kode_siswa,
                    'siswa_chek'    => 1
                ];
                $this->kelas->insert_detail_kelasxi($data);
                $this->kelas->updateSiswaKelasX($kode_siswa);
                $this->session->set_flashdata('warning', '<div class="alert alert-success" role="alert">
                        Berhasil Menghapus Data
                        </div>');
                redirect('kelas/' . $id);
            } elseif ($id == 'XII01' || $id == 'XII01') {
                $kode_siswa = $this->input->post('siswa', true);
                $data = [
                    'kelas_id'  => $id,
                    'siswa_id'  => $kode_siswa,
                    'siswa_chek'    => 1
                ];
                $this->kelas->insert_detail_kelasxii($data);
                $this->kelas->updateSiswaKelasXI($kode_siswa);
                $this->session->set_flashdata('warning', '<div class="alert alert-success" role="alert">
                        Berhasil Menghapus Data
                        </div>');
                redirect('kelas/' . $id);
            }
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
        $this->db->delete('t_detail_kelas', ['id' => $id]);


        $this->session->set_flashdata('warning', '<div class="alert alert-success" role="alert">
                    Berhasil Menghapus Data
                    </div>');
        redirect('detail_kelas/' . $kode);
    }
}
