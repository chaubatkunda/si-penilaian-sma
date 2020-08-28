<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daftar_nilai_model extends CI_Model
{
  public function getAllNilaiKelasX($id)
  {
    $this->db->select('*');
    $this->db->from('t_detail_kelas_x');
    $this->db->join('t_siswa', 't_siswa.nis = t_detail_kelas_x.siswa_id');
    $this->db->where('kelas_id', $id);
    return $this->db->get()->result();
  }
  public function getAllNilaiKelasXI($id)
  {
    $this->db->select('*');
    $this->db->from('t_detail_kelas_xi');
    $this->db->join('t_siswa', 't_siswa.nis = t_detail_kelas_xi.siswa_id');
    $this->db->where('kelas_id', $id);
    return $this->db->get()->result();
  }
  public function getAllNilaiKelasXII($id)
  {
    $this->db->select('*');
    $this->db->from('t_detail_kelas_xii');
    $this->db->join('t_siswa', 't_siswa.nis = t_detail_kelas_xii.siswa_id');
    $this->db->where('kelas_id', $id);
    return $this->db->get()->result();
  }
}
