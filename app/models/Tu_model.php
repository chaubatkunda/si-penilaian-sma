<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tu_model extends CI_Model
{
    public function getAllTu()
    {
        $this->db->select('*');
        $this->db->from('t_tu');
        $this->db->join('t_user', 't_user.id_user = t_tu.user_id');
        return $this->db->get()->result();
    }
    public function insertTu($data)
    {
        return $this->db->insert('t_tu', $data);
    }
}
