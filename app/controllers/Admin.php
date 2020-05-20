<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
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
            'isi'   => 'admin/home'
        );
        $this->load->view('template/wrap', $data, false);
    }


    public function guru()
    {
        $data = array(
            'title' => 'Data Guru',
            'guru'  => $this->admin->getAllGuru(),
            'isi'   => 'guru/home'
        );
        $this->load->view('template/wrap', $data, false);
    }
    public function addguru()
    {

        $data = array(
            'title' => 'Add Guru',
            'guru'  => $this->admin->getAllGuru(),
            'isi'   => 'guru/add'
        );
        $this->form_validation->set_rules('kode_guru', 'Kode Guru', 'required|trim');
        $this->form_validation->set_rules('nama_guru', 'Nama Guru', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('template/wrap', $data, false);
        } else {
            $this->admin->simpanGuru();
            redirect('guru');
        }
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
}
