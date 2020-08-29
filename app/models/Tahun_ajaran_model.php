<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tahun_ajaran_model extends CI_Model
{
    public function getAllTahunAjaran()
    {
        $this->db->order_by('thn_ajaran', 'asc');
        return $this->db->get('t_thn_ajaran')->result();
    }
    public function getAllTahunAjaranById($id)
    {
        return $this->db->get_where('t_thn_ajaran', ['id' => $id])->row();
    }
    public function insert_tahun($data)
    {
        return $this->db->insert('t_thn_ajaran', $data);
    }
    public function update_tahun($id, $data)
    {
        return $this->db->update('t_thn_ajaran', $data, ['id' => $id]);
    }
    public function delete_tahun($id)
    {
        return $this->db->delete('t_thn_ajaran', ['id' => $id]);
    }

    // Detail
    public function getAllDetail($id)
    {
        $this->db->select('*');
        $this->db->from('t_thn_ajaran');
        $this->db->join('t_detail_thn_ajaran', 't_detail_thn_ajaran.thn_ajaran_id = t_thn_ajaran.id');
        $this->db->where('id', $id);
        return $this->db->get()->result();
    }

    public function insert_detail_tahun($data)
    {
        return $this->db->insert('t_detail_thn_ajaran', $data);
    }
}
