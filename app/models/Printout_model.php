<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Printout_model extends CI_Model
{
    public function getAllKategoryKelas($id)
    {
        // return $this->db->get('t_siswa')->result();
        $this->db->select('*');
        $this->db->from('t_siswa');
        $this->db->join('t_kelas', 't_kelas.kode_kelas = t_siswa.kelas_id', 'left');
        $this->db->where('kode_kelas', $id);
        return $this->db->get()->result();
    }
}
