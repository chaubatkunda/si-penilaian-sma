<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daftar_nilai_model extends CI_Model
{
  public function getAllNilaiKelas($kode, $id)
  {
    $this->db->select('*');
    $this->db->from('t_detail_kelas');
    $this->db->join('t_siswa', 't_siswa.nis = t_detail_kelas.siswa_id');
    // $this->db->join('t_mapel');
    // $this->db->where('t_detail_kelas.mapel_id', $id);
    $this->db->where('kelas_id', $kode);
    return $this->db->get()->result();
  }
  public function getMapel($id)
  {
    $this->db->select('*');
    $this->db->from('t_mapel');
    $this->db->join('t_detail_mapel', 't_detail_mapel.mapel_id = t_mapel.kode_mapel');
    $this->db->where('kelas_id', $id);
    return $this->db->get()->result();
  }

  public function getAllNilai($id, $kode)
  {
    $this->db->select('*');
    $this->db->from('t_nilai');
    $this->db->join('t_siswa', 't_siswa.nis = t_nilai.siswa_id');
    $this->db->where('kelas_id', $kode);
    $this->db->where('mapel_id', $id);
    return $this->db->get()->result();
  }
}
