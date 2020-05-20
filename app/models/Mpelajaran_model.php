<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mpelajaran_model extends CI_Model
{
    public function getAllMapel()
    {
        // $this->db->select('*');
        // $this->db->from('t_nilai');
        // $this->db->join('t_mapel', 't_mapel.id_mapel = t_nilai.mapel_id');
        // $this->db->join('t_siswa', 't_siswa.id_siswa = t_nilai.siswa_id');
        // $this->db->order_by('kode_mapel', 'esc');
        return $this->db->get('t_mapel')->result();
    }

    public function insert_data($datam)
    {
        return $this->db->insert('t_mapel', $datam);
    }
}
