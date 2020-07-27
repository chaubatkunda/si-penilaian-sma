<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Data Siswa',
            'siswa' => $this->siswa->getAllSiswa(),
            'isi'   => 'siswa/home'
        );
        // var_dump($data['siswa']);
        // die;
        $this->load->view('template/wrap', $data, false);
    }
    public function detailsiswa($id)
    {
        $data = array(
            'title' => 'Detail Siswa',
            'siswa' => $this->siswa->getAllSiswaById($id),
            'isi'   => 'siswa/detail'
        );
        $this->load->view('template/wrap', $data, false);
    }
    public function addsiswa()
    {
        $data = array(
            'title' => 'Add Siswa',
            'kelas' => $this->admin->getAllKelas(),
            'isi'   => 'siswa/add'
        );

        $this->form_validation->set_rules('nisn', 'NISN', 'required|trim');
        $this->form_validation->set_rules('nama_siswa', 'Nama Siswa', 'required|trim');
        $this->form_validation->set_rules('kls', 'Kelas', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/wrap', $data, false);
        } else {

            $config['upload_path']          = './assets/foto/siswa/';
            $config['allowed_types']        = 'jpg|png|jpeg';
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('foto')) {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('warning', $error);
                redirect('add-siswa');
            } else {
                $det = date('Y-m-d', strtotime($this->input->post('tgl_lahir', true)));
                $data = [
                    'kelas_id'        => $this->input->post('kls', true),
                    'nis'          => $this->input->post('nisn', true),
                    'nama'          => $this->input->post('nama_siswa', true),
                    'tempat_lahir'  => $this->input->post('tempat_lhr', true),
                    'tgl_lahir'     => $det,
                    'alamat'        => $this->input->post('alamat', true),
                    'foto'          => $this->upload->data('file_name')
                ];
                $this->siswa->insert_siswa($data);
                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('warning', '<div class="alert alert-success" role="alert">
                    Berhasil Menambahkan Data
                    </div>');
                    redirect('siswa');
                } else {
                    $this->session->set_flashdata('warning', '<div class="alert alert-danger" role="alert">
                    Gagal Menambahkan Data
                    </div>');
                    redirect('siswa');
                }
            }
        }
    }
    public function edit($id)
    {
        $data = array(
            'title' => 'Edit Siswa',
            'kelas' => $this->admin->getAllKelas(),
            'siswa' => $this->siswa->getAllSiswaById($id),
            'jkl'   => ['1' => 'Pria', '2' => 'Wanita'],
            'isi'   => 'siswa/edit'
        );

        $this->form_validation->set_rules('nisn', 'NISN', 'required|trim');
        $this->form_validation->set_rules('nama_siswa', 'Nama Siswa', 'required|trim');
        // $this->form_validation->set_rules('kls', 'Kelas', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('template/wrap', $data, false);
        } else {
            $config['upload_path']          = './assets/foto/siswa/';
            $config['allowed_types']        = 'jpg|png|jpeg';
            $config['overwrite']            = true;
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('foto')) {
                $det = date('Y-m-d', strtotime($this->input->post('tgl_lahir', true)));
                $datas = [
                    'kelas_id'      => $this->input->post('kls', true),
                    'nis'           => $this->input->post('nisn', true),
                    'nama'          => $this->input->post('nama_siswa', true),
                    'tempat_lahir'  => $this->input->post('tempat_lhr', true),
                    'tgl_lahir'     => $det,
                    'alamat'        => $this->input->post('alamat', true)
                ];
                $this->siswa->update_siswa($id, $datas);
                $this->session->set_flashdata('warning', '<div class="alert alert-success" role="alert">
                    Berhasil Mengubah Data
                    </div>');
                redirect('siswa');
            } else {
                $det = date('Y-m-d', strtotime($this->input->post('tgl_lahir', true)));
                $datas = [
                    'kelas_id'        => $this->input->post('kls', true),
                    'nis'          => $this->input->post('nisn', true),
                    'nama'          => $this->input->post('nama_siswa', true),
                    'tempat_lahir'  => $this->input->post('tempat_lhr', true),
                    'tgl_lahir'     => $det,
                    'alamat'        => $this->input->post('alamat', true),
                    'foto'          => $this->upload->data('file_name')
                ];
                $this->siswa->update_siswa($id, $datas);
                $this->session->set_flashdata('warning', '<div class="alert alert-success" role="alert">
                    Berhasil Mengubah Data
                    </div>');
                redirect('siswa');
            }



            // $this->upload->initialize($config);
            // $det = indoDate($this->input->post('tgl_lahir', true));
            // $data = [
            //     'id_kls' => $this->input->post('kls', true),
            //     'nisn' => $this->input->post('nisn', true),
            //     'nama' => $this->input->post('nama_siswa', true),
            //     'tempat_lahir' => $this->input->post('tempat_lhr', true),
            //     'tgl_lahir' => $det,
            //     'jk' => $this->input->post('jk', true),
            //     'alamat' => $this->input->post('alamat', true),
            //     'foto' => 'default.jpg'
            // ];
            // $this->admin->update_siswa($id, $data);
            // redirect('siswa');
        }
    }

    public function delete($id)
    {
        $this->siswa->delete_siswa($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('warning', '<div class="alert alert-success" role="alert">
            Data Berhasil Dihapus
            </div>');
            redirect('siswa');
        } else {
            $this->session->set_flashdata('warning', '<div class="alert alert-danger" role="alert">
            Data Berhasil Dihapus
            </div>');
            redirect('siswa');
        }
    }
}
