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
    public function update_data($id, $datam)
    {
        return $this->db->update('t_mapel', $datam, ['id_mapel' => $id]);
    }
    public function delete_data($id)
    {
        return $this->db->delete('t_mapel', ['id_mapel' => $id]);
    }
}
