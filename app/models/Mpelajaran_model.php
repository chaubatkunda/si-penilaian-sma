<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mpelajaran_model extends CI_Model
{
    public function getAllMapel()
    {
        return $this->db->get('t_mapel')->result();
    }
    public function getAllMapelById($id)
    {
        return $this->db->get_where('t_mapel', ['id_mapel' => $id])->row();
    }

    public function insert_data($datam)
    {
        return $this->db->insert('t_mapel', $datam);
    }
    public function insert_detmapel($detmapel)
    {
        return $this->db->insert('t_detail_mapel', $detmapel);
    }
    public function update_data($id, $datam)
    {
        return $this->db->update('t_mapel', $datam, ['id_mapel' => $id]);
    }
    public function delete_data($id)
    {
        return $this->db->delete('t_mapel', ['id_mapel' => $id]);
    }
    public function getAllMapelGuru($id)
    {
        $this->db->select('*');
        $this->db->from('t_mapel');
        $this->db->join('t_detail_mapel', 't_detail_mapel.mapel_id = t_mapel.kode_mapel');
        $this->db->join('t_guru', 't_guru.id_guru = t_detail_mapel.guru_id');
        $this->db->join('t_kelas', 't_kelas.id_kelas = t_detail_mapel.kelas_id');
        $this->db->where('id_mapel', $id);
        return $this->db->get()->row();
    }
}
