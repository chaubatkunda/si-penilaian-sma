<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kd_model extends CI_Model
{
    public function getAllKd()
    {
        // return $this->db->get('t_kd')->result();
        $this->db->select('*');
        $this->db->from('t_kd');
        $this->db->join('t_guru', 't_guru.id_guru = t_kd.guru_id');
        $this->db->join('t_mapel', 't_mapel.id_mapel = t_kd.mapel_id');
        return $this->db->get()->result();
    }
    public function getAllKdById($id)
    {
        // return $this->db->get('t_kd')->result();
        $this->db->select('*');
        $this->db->from('t_kd');
        $this->db->join('t_guru', 't_guru.id_guru = t_kd.guru_id');
        $this->db->join('t_mapel', 't_mapel.id_mapel = t_kd.mapel_id');
        $this->db->where('mapel_id', $id);
        return $this->db->get()->result();
    }
    public function getAllKdByIdd($id)
    {
        // return $this->db->get('t_kd')->result();
        $this->db->select('*');
        $this->db->from('t_kd');
        $this->db->join('t_guru', 't_guru.id_guru = t_kd.guru_id');
        $this->db->join('t_mapel', 't_mapel.id_mapel = t_kd.mapel_id');
        $this->db->where('mapel_id', $id);
        return $this->db->get()->row();
    }

    public function insert_kd($data)
    {
        return $this->db->insert('t_kd', $data);
    }
    public function update_kd($id, $data)
    {
        return $this->db->update('t_kd', $data, ['id_kd' => $id]);
    }
    public function delete_kd($id)
    {
        return $this->db->delete('t_kd', ['id_kd' => $id]);
    }
}
