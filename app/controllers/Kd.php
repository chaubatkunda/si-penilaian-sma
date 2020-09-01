<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kd extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_login();
    }
    public function index()
    {
        $data = array(
            'title' => 'Kompetensi Dasar',
            // 'kd'    => $this->kd->getAllKd(),
            'mapel' => $this->kd->getAllMapel(),
            'isi'   => 'kd/home'
        );
        $this->load->view('template/wrap', $data, false);
    }
    public function add($id)
    {
        $data = array(
            'title'         => 'Kompetensi Dasar',
            'pelajaran'     => $this->mpelajaran->getAllMapelGuru($id),
            'guru'          => $this->guru->getAllGuru(),
            'isi'           => 'kd/add'
        );
        $this->form_validation->set_rules('guru', 'Nama Guru', 'trim|required');
        $this->form_validation->set_rules('mp', 'Mata Pelajaran', 'trim|required');
        $this->form_validation->set_rules('kd', 'Kompetensi Dasar', 'trim|required');
        $this->form_validation->set_rules('kds', 'Kompetensi Dasar', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('template/wrap', $data, false);
        } else {
            // $id = $this->input->post('mp', true);
            $data = [
                'guru_id'   => $this->input->post('guru', true),
                'mapel_id'  => $this->input->post('mp', true),
                'kd'        => $this->input->post('kd', true),
                'sub_kd'    => $this->input->post('kds', true)
            ];
            $this->kd->insert_kd($data);
            $this->session->set_flashdata('warning', '<div class="alert alert-success" role="alert">
                Data Berhasil Ditambahkan
                </div>');
            redirect('detail-kd/' . $id);
        }
    }

    public function detail($id)
    {
        $data = array(
            'title' => 'Kompetensi Dasar',
            'kd'    => $this->kd->getAllKdById($id),
            'mapel' => $this->mpelajaran->getAllMapelById($id),
            'isi'   => 'kd/detail'
        );
        $this->load->view('template/wrap', $data, false);
    }
    public function edit($id)
    {
        $data = array(
            'title'         => 'Kompetensi Dasar',
            'kd'            => $this->kd->getAllKdByIdKd($id),
            'pelajaran'     => $this->mpelajaran->getAllMapel(),
            'guru'          => $this->guru->getAllGuru(),
            'isi'           => 'kd/edit'
        );
        // var_dump($data['kd']);
        // die;
        $this->form_validation->set_rules('kd', 'Kompetensi Dasar', 'trim|required');
        $this->form_validation->set_rules('kds', 'Kompetensi Dasar', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('template/wrap', $data, false);
        } else {
            $idkode = $this->input->get('kode', true);
            $data = [
                'kd' => $this->input->post('kd', true),
                'sub_kd' => $this->input->post('kds', true)
            ];
            $this->kd->update_kd($id, $data);
            redirect('detail-kd/' . $idkode);
        }
    }
    public function detailkd($id)
    {
        $data = array(
            'title' => 'Kompetensi Dasar',
            'kd'    => $this->kd->getAllKdByIdd($id),
            'isi'   => 'kd/add_detail_kd'
        );
        $this->form_validation->set_rules('guru', 'Nama Guru', 'trim|required');
        $this->form_validation->set_rules('mp', 'Mata Pelajaran', 'trim|required');
        $this->form_validation->set_rules('kd', 'Kompetensi Dasar', 'trim|required');
        // $this->form_validation->set_rules('ket', 'Kompetensi Dasar', 'trim|required');
        $this->form_validation->set_rules('kds', 'Kompetensi Dasar', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('template/wrap', $data, false);
        } else {
            $data = [
                'guru_id' => $this->input->post('guru', true),
                'mapel_id' => $this->input->post('mp', true),
                'kd' => $this->input->post('kd', true),
                'sub_kd' => $this->input->post('kds', true)
                // 'ket_kd' => $this->input->post('ket', true)
            ];
            $this->kd->insert_kd($data);
            $this->session->set_flashdata('warning', '<div class="alert alert-success" role="alert">
                Data Berhasil Ditambahkan
                </div>');
            redirect('detail-kd/' . $id);
        }
    }
    public function delete($id)
    {
        $idd = $this->input->get('id', true);
        $this->kd->delete_kd($id);
        $this->session->set_flashdata('warning', '<div class="alert alert-success" role="alert">
                Data Berhasil Dihapus
                </div>');
        redirect('detail-kd/' . $idd);
    }
}
