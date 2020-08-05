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
        $pil = $this->input->post('pilih_kelas', true);
        // $query = $this->db->get_where('t_kelas', ['kode_kelas' => $kodekolas])->num_rows();
        if ($pil) {
            $data = [
                'id_kelas'      => $this->fungsi->getIdKelas(),
                'kode_kelas'    => $this->input->post('kode_kls', true),
                'nama_kelas'    => $this->input->post('kelas', true),
                'sub_kelas'     => $pil
            ];
            return $this->db->insert('t_kelas', $data);
        } else {
            $data = [
                'id_kelas'      => $this->fungsi->getIdKelas(),
                'kode_kelas'    => $this->input->post('kode_kls', true),
                'nama_kelas'    => $this->input->post('kelas', true),
                'sub_kelas'     => ""
            ];
            return $this->db->insert('t_kelas', $data);
        }
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
