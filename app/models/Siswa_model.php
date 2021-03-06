<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa_model extends CI_Model
{
    public function getAllSiswa()
    {
        return $this->db->get('t_siswa')->result();
        // $this->db->select('*');
        // $this->db->from('t_siswa');
        // $this->db->join('t_kelas', 't_kelas.kode_kelas = t_siswa.kelas_id', 'left');
        // // $this->db->where('t_siswa.id_siswa');
        // return $this->db->get()->result();
    }
    public function getAllSiswaById($id)
    {
        // $this->db->select('*');
        // $this->db->from('t_siswa');
        // $this->db->join('t_kelas', 't_kelas.kode_kelas = t_siswa.kelas_id', 'left');
        // $this->db->where('t_siswa.id', $id);
        // return $this->db->get()->row();
        return $this->db->get_where('t_siswa', ['id' => $id])->row();
    }
    public function insert_siswa($data)
    {
        return $this->db->insert('t_siswa', $data);
    }
    public function update_siswa($id, $datas)
    {
        return $this->db->update('t_siswa', $datas, ['id' => $id]);
    }
    public function delete_siswa($id)
    {
        return $this->db->delete('t_siswa', ['id' => $id]);
    }
}
