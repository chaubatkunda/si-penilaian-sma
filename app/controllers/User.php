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
            'title' => 'Data Users',
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
                'id_user'       => $this->fungsi->getSumIdUser(),
                'nama'          => $this->input->post('nama_guru', true),
                'username'      => $this->input->post('username', true),
                'password'      => password_hash($this->input->post('password1', true), PASSWORD_DEFAULT),
                'level'         => $this->input->post('level', true),
                'fotou'         => 'default.jpg'
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

    public function editprofil($id)
    {
        $data = array(
            'title' => 'Edit Profil',
            'users' => $this->user->userSession($id),
            'isi'   => 'user/edit_profil'
        );
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password Lama', 'trim|required');
        $this->form_validation->set_rules('password1', 'Password Baru', 'trim|required');
        $this->form_validation->set_rules('password2', 'Konfirmasi Password Baru', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('template/wrap', $data, false);
        } else {
            $user = $this->user->userSession($id);
            $password_lama = $this->input->post('password', true);
            $password_baru = $this->input->post('password1', true);
            if (!password_verify($password_lama, $user->password)) {
                $this->session->set_flashdata('warning', '<div class="alert alert-danger" role="alert">
                   Password Lama Salah
                    </div>');
                redirect('edit_profil/' . $id);
            } else {
                if ($password_lama == $password_baru) {
                    $this->session->set_flashdata('warning', '<div class="alert alert-danger" role="alert">
                    Password Lama Bedah Sama Password Baru
                    </div>');
                    redirect('edit_profil/' . $id);
                } else {

                    $config['upload_path']          = './assets/foto/guru/';
                    $config['allowed_types']        = 'jpg|png|jpeg';
                    $this->upload->initialize($config);
                    if (!$this->upload->do_upload('foto')) {
                        // $error = array('error' => $this->upload->display_errors());
                        // $this->session->set_flashdata('warning', $error);
                        $data = [
                            'nama'  => $this->input->post('nama', true),
                            'username'  => $this->input->post('username', true),
                            'password'  => password_hash($password_baru, PASSWORD_DEFAULT)
                            // 'foto'      => $this->upload->data('file_name')
                        ];
                        $this->user->update_profil($id, $data);
                        $this->session->set_flashdata('warning', '<div class="alert alert-success" role="alert">
                       Profil Berhasil Diubah
                        </div>');
                        redirect('edit_profil/' . $id);
                    } else {
                        $data = [
                            'nama'  => $this->input->post('nama', true),
                            'username'  => $this->input->post('username', true),
                            'password'  => password_hash($password_baru, PASSWORD_DEFAULT),
                            'fotou'      => $this->upload->data('file_name')
                        ];
                        $this->user->update_profil($id, $data);
                        $this->session->set_flashdata('warning', '<div class="alert alert-success" role="alert">
                        Profil Berhasil Diubah
                        </div>');
                        redirect('edit_profil/' . $id);
                    }
                }
            }
        }
    }

    public function delete($id)
    {
        $this->db->delete('t_user', ['id_user' => $id]);
        $this->session->set_flashdata('warning', '<div class="alert alert-success" role="alert">
                        Akun Berhasil Dihapus
                        </div>');
        redirect('user');
    }
}
