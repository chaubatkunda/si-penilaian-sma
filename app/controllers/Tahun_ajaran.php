<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tahun_ajaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_login();
    }
    public function index()
    {
        $data = array(
            'title'     => 'Tahun Ajaran',
            'tahun'     => $this->tahun->getAllTahunAjaran(),
            'isi'       => 'tahun_ajaran/home'
        );
        $this->load->view('template/wrap', $data, false);
    }
    public function add()
    {
        $data = array(
            'title'     => 'Tambah Tahun Ajaran',
            'isi'       => 'tahun_ajaran/add'
        );
        $this->form_validation->set_rules('thn_ajaran', 'Tahun Ajaran', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('template/wrap', $data, false);
        } else {
            $data = [
                'thn_ajaran'        => $this->input->post('thn_ajaran', true)
            ];
            $this->tahun->insert_tahun($data);
            $this->session->set_flashdata('warning', '<div class="alert alert-success" role="alert">
                    Berhasil Menambahkan Data
                    </div>');
            redirect('tahun_ajaran');
        }
    }
    public function edit($id)
    {
        $data = array(
            'title'     => 'Edit Tahun Ajaran',
            'tahun'     => $this->tahun->getAllTahunAjaranById($id),
            'isi'       => 'tahun_ajaran/edit'
        );
        $this->form_validation->set_rules('thn_ajaran', 'Tahun Ajaran', 'required|trim');
        // $this->form_validation->set_rules('Ket_thn', 'Keterangan', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('template/wrap', $data, false);
        } else {
            $data = [
                'thn_ajaran'        => $this->input->post('thn_ajaran', true)
                // 'ket_thn_ajaran'    => $this->input->post('Ket_thn', true)
            ];
            $this->tahun->update_tahun($id, $data);
            $this->session->set_flashdata('warning', '<div class="alert alert-success" role="alert">
                    Berhasil Menambahkan Data
                    </div>');
            redirect('tahun_ajaran');
        }
    }
    public function delete($id)
    {
        $this->tahun->delete_tahun($id);
        $this->session->set_flashdata('warning', '<div class="alert alert-success" role="alert">
                    Berhasil Menghapus Data
                    </div>');
        redirect('tahun_ajaran');
    }

    // Detail
    public function detail($id)
    {
        $tahun = $this->tahun->getAllTahunAjaranById($id);
        $data = array(
            'title'     => 'Tahun Ajaran ' . $tahun->thn_ajaran,
            'tahun'     => $tahun,
            'detail'    => $this->tahun->getAllDetail($id),
            'isi'       => 'tahun_ajaran/home_detail'
        );
        $this->load->view('template/wrap', $data, false);
    }
    public function add_detail($id)
    {
        $tahun = $this->tahun->getAllTahunAjaranById($id);
        $data = array(
            'title'     => 'Tahun Ajaran ' . $tahun->thn_ajaran,
            'tahun'     => $tahun,
            'isi'       => 'tahun_ajaran/add_detail'
        );
        $this->form_validation->set_rules('Ket_thn', 'Keterangan', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('template/wrap', $data, false);
        } else {
            $data = [
                'thn_ajaran_id'        => $id,
                'ket_thn_ajaran'    => $this->input->post('Ket_thn', true)
            ];
            $this->tahun->insert_detail_tahun($data);
            $this->session->set_flashdata('warning', '<div class="alert alert-success" role="alert">
                    Berhasil Menambahkan Data
                    </div>');
            redirect('tahun_ajaran/detail/' . $id);
        }
    }
    public function edit_detail($id)
    {
        $tahun = $this->tahun->getAllTahunAjaranById($id);

        $data = array(
            'title'     => 'Edit Ajaran ' . $tahun->thn_ajaran,
            'tahun'     => $tahun,
            'detail'    => $this->tahun->getAllDetailByID($id),
            'isi'       => 'tahun_ajaran/edit_detail'
        );
        $this->form_validation->set_rules('Ket_thn', 'Keterangan', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('template/wrap', $data, false);
        } else {
            $data = [
                'thn_ajaran_id'        => $id,
                'ket_thn_ajaran'    => $this->input->post('Ket_thn', true)
            ];
            $this->tahun->update_detail_tahun($id, $data);
            $this->session->set_flashdata('warning', '<div class="alert alert-success" role="alert">
                    Berhasil Menambahkan Data
                    </div>');
            redirect('tahun_ajaran/detail/' . $id);
        }
    }
    public function hapus_detail($id)
    {
        $kode = $this->input->get('kode', true);
        $this->db->delete('t_detail_thn_ajaran', ['id_thn_det' => $id]);
        $this->session->set_flashdata('warning', '<div class="alert alert-success" role="alert">
                    Berhasil Menghapus Data
                    </div>');
        redirect('tahun_ajaran/detail/' . $kode);
    }
}
