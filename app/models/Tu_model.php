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
    public function getAllTuById($id)
    {
        $this->db->select('*');
        $this->db->from('t_tu');
        $this->db->join('t_user', 't_user.id_user = t_tu.user_id');
        $this->db->where('id_tu',$id);
        return $this->db->get()->row();
    }
    public function insertTu($data)
    {
        return $this->db->insert('t_tu', $data);
    }

    public function update_akun($datau,$id){
        return $this->db->update('t_user',$datau,['id_user',$id]);
    }
    public function update_Tu($data,$nip){
        return $this->db->update('t_tu',$data,['nip',$nip]);
    } 
}
