<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function index()
    {
        $username = $this->input->post("username", true);
        $password = $this->input->post("password", true);

        $user = $this->user->userLogin($username);

        $this->form_validation->set_rules('username', 'Username', 'required|trim', ['required' => 'Username Tidak Boleh Kosong']);
        $this->form_validation->set_rules('password', 'Password', 'required|trim', ['required' => 'Password Tidak Boleh Kosong']);
        if ($this->form_validation->run() == false) {
            $this->load->view('auth/login');
        } else {
            if ($user) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'id' => $user['id_user'],
                        'username' => $user['username'],
                        'level' => $user['level']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['level'] == 1) {
                        redirect('dashboard');
                    } elseif ($user['level'] == 2) {
                        redirect('user');
                    }
                } else {
                    $this->session->set_flashdata('login', '<div class="alert alert-danger" role="alert">
                Password Salah
                </div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('login', '<div class="alert alert-danger" role="alert">
                Username Salah
                </div>');
                redirect('auth');
            }
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('level');
        $this->session->set_flashdata('login', '<div class="alert alert-success" role="alert">
                Berhasil Logout
                </div>');
        redirect('auth');
    }
}
