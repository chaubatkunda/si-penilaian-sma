<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_login();
    }
    public function index()
    {
        $data = array(
            'title'     => 'Tata Usaha',
            'tu'     => $this->tu->getAllTu(),
            'isi'       => 'tu/home'
        );
        $this->load->view('template/wrap', $data, false);
    }
    public function add()
    {
        $data = array(
            'title'     => 'Tambah',
            'tu'     => $this->tu->getAllTu(),
            'isi'       => 'tu/add_tu'
        );

        $this->form_validation->set_rules('nip', 'NIP', 'trim|required|is_unique[t_tu.nip]');
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('no_tlp', 'Telp', 'trim|required|numeric');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');

        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|matches[password2]');
        $this->form_validation->set_rules('password2', 'Konfirmasi Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/wrap', $data, false);
        } else {
            $data = [
                'user_id'   => $this->fungsi->getSumIdUser(),
                'nip'      => $this->input->post('nip', true),
                // 'jk'        => $this->input->post('jk', true),
                'telp'      => $this->input->post('no_tlp', true),
                'alamat'    => $this->input->post('alamat', true)
            ];

            $datau = [
                'id_user'   => $this->fungsi->getSumIdUser(),
                'nama'      => $this->input->post('nama', true),
                'username'  => $this->input->post('username', true),
                'password'  => password_hash($this->input->post('password1', true), PASSWORD_DEFAULT),
                'level'     => 1,
                'fotou'      => 'default.jpg'
            ];

            $this->user->simpanAkun($datau);
            $this->tu->insertTu($data);
            $this->session->set_flashdata('warning', '<div class="alert alert-success" role="alert">
                    Berhasil Menambahkan Data
                    </div>');
            redirect('tata_usaha');
        }
    }
    public function edit($id)
    {
        $data = array(
            'title'     => 'Tambah',
            'tu'     => $this->tu->getAllTuById($id),
            'isi'       => 'tu/edit_tu'
        );

        $this->form_validation->set_rules('nip', 'NIP', 'trim|required|is_unique[t_tu.nip]');
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('no_tlp', 'Telp', 'trim|required|numeric');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');

        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|matches[password2]');
        $this->form_validation->set_rules('password2', 'Konfirmasi Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/wrap', $data, false);
        } else {
            $nip = $this->input->post('nip', true);
            $data = [
                'nip'      => $this->input->post('nip', true),
                'telp'      => $this->input->post('no_tlp', true),
                'alamat'    => $this->input->post('alamat', true)
            ];

            $datau = [
                'nama'      => $this->input->post('nama', true)
            ];

            $this->tu->update_akun($datau,$id);
            $this->tu->update_Tu($data,$nip);
            $this->session->set_flashdata('warning', '<div class="alert alert-success" role="alert">
                    Berhasil Menambahkan Data
                    </div>');
            redirect('tata_usaha');
        }
    }

    public function detail($id){
         $data = array(
            'title'     => 'Detail',
            'tu'     => $this->tu->getAllTuById($id),
            'isi'       => 'tu/detail'
        );
        $this->load->view('template/wrap', $data, false);
    }
}
