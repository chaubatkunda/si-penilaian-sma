<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Printout_model extends CI_Model
{
    public function getKelasById($id)
    {
        return $this->db->get_where('t_kelas', ['kode_kelas' => $id])->row();
    }
    public function getAllKategoryKelas($id)
    {
        // return $this->db->get('t_siswa')->result();
        $this->db->select('*');
        $this->db->from('t_kelas');
        $this->db->join('t_detail_kelas', 't_detail_kelas.kelas_id = t_kelas.kode_kelas', 'left');
        $this->db->join('t_siswa', 't_siswa.nis = t_detail_kelas.siswa_id');
        $this->db->where('kode_kelas', $id);
        return $this->db->get()->result();
    }

    public function getAllNilai($id)
    {
        $this->db->select('*');
        $this->db->from('t_kelas');
        $this->db->join('t_detail_kelas', 't_detail_kelas.kelas_id = t_kelas.kode_kelas');
        $this->db->join('t_siswa', 't_siswa.nis = t_detail_kelas.siswa_id');
        $this->db->where('kelas_id', $id);
        return $this->db->get()->result();
        // return $this->db->get_where('t_siswa', ['kelas_id' => $id])->result();
    }

    public function guruMapel($kode)
    {
        $this->db->select('*');
        $this->db->from('t_mapel');
        $this->db->join('t_detail_mapel', 't_detail_mapel.mapel_id = t_mapel.kode_mapel');
        $this->db->join('t_guru', 't_guru.id_guru = t_detail_mapel.guru_id');
        $this->db->where('kode_mapel', $kode);
        return $this->db->get()->row();
    }
}
