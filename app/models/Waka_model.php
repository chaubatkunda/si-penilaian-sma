<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Waka_model extends CI_Model
{
    public function getAllwaka()
    {
        $this->db->select('*');
        $this->db->from('t_waka');
        $this->db->join('t_guru', 't_guru.id_guru = t_waka.guru_id');
        return $this->db->get()->result();
    }

    public function insert_waka($data)
    {
        return $this->db->insert('t_waka', $data);
    }
    public function update_wakaguru($idg, $datag)
    {
        return $this->db->update('t_guru', $datag, ['id_guru' => $idg]);
    }
    public function hapus_waka($id)
    {
        return $this->db->delete('t_waka', ['id_waka' => $id]);
    }
}
