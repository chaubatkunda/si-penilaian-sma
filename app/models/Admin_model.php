<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    public function getAllKelas()
    {
        $this->db->order_by('nama_kelas', 'asc');
        return $this->db->get('t_kelas')->result();
    }
    public function simpanKelas()
    {
        $data = [
            'kode_kelas'    => $this->input->post('kode_kls', true),
            'nama_kelas'    => $this->input->post('kelas', true),
            'sub_kelas'     => $this->input->post('kode_kls', true)
        ];
        return $this->db->insert('t_kelas', $data);
    }

    public function countSiswa()
    {
        return $this->db->get('t_siswa')->num_rows();
    }
    public function countGuru()
    {
        return $this->db->get('t_guru')->num_rows();
    }
    public function countWaka()
    {
        return $this->db->get('t_waka')->num_rows();
    }
    public function countKelas()
    {
        return $this->db->get('t_kelas')->num_rows();
    }
    public function countTu()
    {
        return $this->db->get('t_tu')->num_rows();
    }
}
