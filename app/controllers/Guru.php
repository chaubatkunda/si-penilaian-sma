<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_login();
    }
    public function index()
    {
        $data = array(
            'title' => 'Dashboard',
            'count_siswa'  => $this->admin->countSiswa(),
            'count_guru'   => $this->admin->countGuru(),
            'count_waka'   => $this->admin->countWaka(),
            'count_kelas'   => $this->admin->countKelas(),
            'isi'           => 'admin/home'
        );
        $this->load->view('template/wrap', $data, false);
    }


    public function guru()
    {
        $data = array(
            'title' => 'Data Guru',
            'guru'  => $this->guru->getAllGuru(),
            'isi'   => 'guru/home'
        );
        $this->load->view('template/wrap', $data, false);
    }
    public function addguru()
    {

        $data = array(
            'title' => 'Add',
            'guru'  => $this->guru->getAllGuru(),
            'isi'   => 'guru/add'
        );
        $this->form_validation->set_rules('kode_guru', 'Kode Guru', 'required|trim');
        $this->form_validation->set_rules('nama_guru', 'Nama Guru', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('template/wrap', $data, false);
        } else {
            $data = [
                'nip'           => $this->input->post('kode_guru', true),
                'nama_guru'     => $this->input->post('nama_guru', true),
                'no_tlp'        => $this->input->post('no_tlp', true),
                'alamat_guru'        => $this->input->post('alamat', true),
                'jabatan'       => 3,
                'foto'          => 'default.jpg'
            ];
            $this->guru->simpanGuru($data);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('warning', '<div class="alert alert-success" role="alert">
                    Berhasil Menambahkan Data
                    </div>');
                redirect('guru');
            } else {
                $this->session->set_flashdata('warning', '<div class="alert alert-danger" role="alert">
                    Gagal Menambahkan Data
                    </div>');
                redirect('add-guru');
            }
        }
    }
    public function detail($id)
    {
        $data = array(
            'title' => 'Data Guru',
            'guru'  => $this->guru->getAllGuruById($id),
            'isi'   => 'guru/detail'
        );
        $this->load->view('template/wrap', $data, false);
    }
    public function edit($id)
    {

        $data = array(
            'title' => 'Edit',
            'guru'  => $this->guru->getAllGuruById($id),
            'isi'   => 'guru/edit'
        );
        $this->form_validation->set_rules('kode_guru', 'Kode Guru', 'required|trim');
        $this->form_validation->set_rules('nama_guru', 'Nama Guru', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('template/wrap', $data, false);
        } else {
            $data = [
                'nip'           => $this->input->post('kode_guru', true),
                'nama_guru'     => $this->input->post('nama_guru', true),
                'no_tlp'        => $this->input->post('no_tlp', true),
                'alamat_guru'   => $this->input->post('alamat', true),
            ];
            $this->guru->updateGuru($id, $data);
            $this->session->set_flashdata('warning', '<div class="alert alert-success" role="alert">
                    Berhasil Mengubah Data
                    </div>');
            redirect('guru');
        }
    }
    public function hapus($id)
    {
        $this->guru->hapusGuru($id);
        $this->session->set_flashdata('warning', '<div class="alert alert-success" role="alert">
                    Berhasil Menghapus Data
                    </div>');
        redirect('guru');
    }

    public function kelas()
    {
        $data = array(
            'title' => 'Data Kelas',
            'kelas' => $this->admin->getAllKelas(),
            'isi'   => 'kelas/home'
        );
        $this->load->view('template/wrap', $data, false);
    }
    public function addkelas()
    {
        $data = array(
            'title' => 'Add Kelas',
            'kelas' => $this->admin->getAllKelas(),
            'isi'   => 'kelas/add'
        );
        $this->form_validation->set_rules('kode_kls', 'Kode Kelas', 'required|trim');
        $this->form_validation->set_rules('kelas', 'Kelas', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/wrap', $data, false);
        } else {
            $this->admin->simpanKelas();
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
}
