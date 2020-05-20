<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mpelajaran_model extends CI_Model
{
    public function getAllMapel()
    {
        return $this->db->get('t_mapel')->result();
    }

    public function insert_data($datam)
    {
        return $this->db->insert('t_mapel', $datam);
    }
}
