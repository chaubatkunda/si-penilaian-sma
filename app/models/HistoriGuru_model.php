<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HistoriGuru_model extends CI_Model
{
    public function guruHistori($id)
    {
        $this->db->select('*');
        $this->db->from('t_detail_mapel');
        $this->db->join('t_mapel', 't_mapel.kode_mapel = t_detail_mapel.mapel_id');
        $this->db->join('t_thn_ajaran', 't_thn_ajaran.id = t_detail_mapel.thn_ajaran_id');
        $this->db->join('t_kelas', 't_kelas.id_kelas = t_detail_mapel.kelas_id');
        $this->db->where('t_detail_mapel.guru_id', $id);
        return $this->db->get()->result();
    }
}
