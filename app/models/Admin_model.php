<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    public function getAllGuru()
    {
        return $this->db->get('t_guru')->result();
    }
    public function simpanGuru()
    {
        $data = [
            'kode_guru' => $this->input->post('kode_guru'),
            'nama_guru' => $this->input->post('nama_guru'),
            'jk' => $this->input->post('jk'),
            'no_tlp' => $this->input->post('no_tlp'),
            'alamat' => $this->input->post('alamat'),
            'jabatan' => $this->input->post('jabatan'),
            'foto' => 'default.jpg'
        ];
        return $this->db->insert('t_guru', $data);
    }

    public function getAllKelas()
    {
        return $this->db->get('t_kelas')->result();
    }
    public function simpanKelas()
    {
        $data = [
            'kode_kelas' => $this->input->post('kode_kls', true),
            'nama_kelas' => $this->input->post('kelas', true)
        ];
        return $this->db->insert('t_kelas', $data);
    }
}
