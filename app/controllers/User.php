<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
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
            'users' => $this->user->getUser(),
            'isi'   => 'user/home'
        );
        $this->load->view('template/wrap', $data, false);
    }

    public function addakun()
    {
        $data = array(
            'title' => 'Tambah User',
            'guru'  => $this->user->getAllUserGuru(),
            'isi'   => 'user/add'
        );

        $this->form_validation->set_rules('guru', 'Nama Guru', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[t_user.username]');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|matches[password2]', ['matches' => 'Password Tidak Sama']);
        $this->form_validation->set_rules('password2', 'Konfirmasi Password', 'required|trim|matches[password1]', ['matches' => 'Password Tidak Sama']);
        $this->form_validation->set_rules('level', 'Level', 'required|trim', ['required' => 'Wajib Dipilih']);

        if ($this->form_validation->run() == false) {
            $this->load->view('template/wrap', $data, false);
        } else {
            $id = $this->input->post('guru', true);
            $data = [
                'user_id_guru' => $this->fungsi->getSumIdUser()
            ];
            $datau = [
                'id_user'   => $this->fungsi->getSumIdUser(),
                'nama' => $this->input->post('nama_guru', true),
                'username' => $this->input->post('username', true),
                'password' => password_hash($this->input->post('password1', true), PASSWORD_DEFAULT),
                'level' => $this->input->post('level', true)
            ];
            $this->guru->updateGuru($id, $data);
            $this->user->simpanAkun($datau);
            redirect('user');
        }
    }

    public function getMapelGuru()
    {
        $guru = $this->input->post('guru');
        $data = $this->user->getAllMapelGuru($guru);
        echo json_encode($data);
    }
}
