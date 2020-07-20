<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Waka extends CI_Controller
{


    public function index()
    {
        $data = array(
            'title'     => 'Waka Kurikulum',
            'waka'      => $this->waka->getAllwaka(),
            'isi'       => 'waka/home'
        );
        $this->load->view('template/wrap', $data, false);
    }
    public function add()
    {
        $data = array(
            'title'     => 'Add Waka Kurikulum',
            'waka'      => $this->guru->getAllGuru(),
            'isi'       => 'waka/add'
        );
        $this->form_validation->set_rules('nama_waka', 'Nama Waka', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('template/wrap', $data, false);
        } else {
            $idg = $this->input->post('nama_waka', true);
            $datag = [
                'jabatan'   => 2,
            ];
            $data = [
                'guru_id'   => $this->input->post('nama_waka', true),
            ];
            $this->waka->update_wakaguru($idg, $datag);
            $this->waka->insert_waka($data);
            redirect('waka.kurikulum');
        }
    }

    public function hapus($id)
    {
        $idg = $this->input->get('id', true);
        $datag = [
            'jabatan'   => 3,
        ];
        $this->waka->update_wakaguru($idg, $datag);
        $this->waka->hapus_waka($id);
        redirect('waka.kurikulum');
    }
}
