<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kd_model extends CI_Model
{
    public function getAllKd()
    {
        return $this->db->get('t_kd')->result();
    }
}
