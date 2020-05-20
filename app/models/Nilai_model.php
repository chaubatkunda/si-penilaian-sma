<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nilai_model extends CI_Model
{
    public function getAllNilai()
    {
        $this->db->select('*');
        $this->db->from('t_nilai');
        $this->db->join('t_mapel', 't_mapel.id_mapel = t_nilai.mapel_id');
        $this->db->join('t_siswa', 't_siswa.id_siswa = t_nilai.siswa_id');
        $this->db->order_by('t_siswa.nisn', 'desc');
        return $this->db->get()->result();
    }
}
