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
    public function insert_kd($data)
    {
        return $this->db->insert('t_kd', $data);
    }
}
