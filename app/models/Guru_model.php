<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru_model extends CI_Model
{
    public function getAllGuru()
    {
        return $this->db->get('t_guru')->result();
    }
    public function getAllGuruById($id)
    {
        return $this->db->get_where('t_guru', ['id_guru' => $id])->row();
    }
    public function simpanGuru($data)
    {
        return $this->db->insert('t_guru', $data);
    }
    public function updateGuru($id, $data)
    {
        return $this->db->update('t_guru', $data, ['id_guru' => $id]);
    }
    public function hapusGuru($id)
    {
        return $this->db->delete('t_guru', ['id_guru' => $id]);
    }
    public function hapusKelas($id)
    {
        return $this->db->delete('t_kelas', ['id_kelas' => $id]);
    }
}
