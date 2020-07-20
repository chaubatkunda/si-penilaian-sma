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
            'title' => 'Data Kelas',
            'guru'  => $this->user->getAllUserGuru(),
            'isi'   => 'user/add'
        );

        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[t_user.username]');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|matches[password2]', ['matches' => 'Password Tidak Sama']);
        $this->form_validation->set_rules('password2', 'Konfirmasi Password', 'required|trim|matches[password1]', ['matches' => 'Password Tidak Sama']);
        $this->form_validation->set_rules('level', 'Level', 'required|trim', ['required' => 'Wajib Dipilih']);

        if ($this->form_validation->run() == false) {
            $this->load->view('template/wrap', $data, false);
        } else {
            $this->user->simpanAkun();
            redirect('user');
        }
    }
}
