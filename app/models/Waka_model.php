<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Waka_model extends CI_Model
{
    public function getAllwaka()
    {
        $this->db->select('*');
        $this->db->from('t_waka');
        $this->db->join('t_guru', 't_guru.kode_guru = t_waka.guru_id');
        $this->db->join('t_mapel', 't_mapel.id_mapel = t_waka.mapel_id');
        // $this->db->order_by('id_waka', 'desc');
        return $this->db->get()->result();
    }

    public function insert_waka($dataw)
    {
        return $this->db->insert('t_waka', $dataw);
    }
}
