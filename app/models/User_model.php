<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function userLogin($username)
    {
        $this->db->select('*');
        $this->db->from('t_user');
        $this->db->join('t_tu', 't_tu.user_id = t_user.id_user', 'left');
        $this->db->join('t_guru', 't_guru.user_id_guru = t_user.id_user', 'left');
        $this->db->where('username', $username);
        return $this->db->get()->row_array();

        // return $this->db->get_where('view_login', ['username' => $username])->row_array();
    }

    public function userSession($id)
    {
        $this->db->select('*');
        $this->db->from('t_user');
        $this->db->join('t_guru', 't_guru.user_id_guru = t_user.id_user', 'left');
        $this->db->where('t_user.id_user', $id);
        return $this->db->get()->row();
    }

    public function getUser()
    {
        return $this->db->get('t_user')->result_array();
    }
    public function simpanAkun($datau)
    {
        return $this->db->insert('t_user', $datau);
    }

    public function getAllUserGuru()
    {
        $this->db->select('*');
        $this->db->from('t_guru');
        $this->db->join('t_user', 't_user.id_user = t_guru.user_id_guru', 'left');
        return $this->db->get()->result();
    }

    public function getAllMapelGuru($guru)
    {
        return $this->db->get_where('t_guru', ['id_guru' => $guru])->row();

        // $this->db->select('*');
        // $this->db->from('t_detail_mapel');
        // $this->db->join('t_guru', 't_guru.id_guru = t_detail_mapel.guru_id');
        // $this->db->join('t_kelas', 't_kelas.id_kelas = t_detail_mapel.kelas_id');
        // $this->db->join('t_mapel', 't_mapel.kode_mapel = t_detail_mapel.mapel_id');
        // $this->db->where('guru_id', $guru);
        // return $this->db->get()->result();
    }

    public function guruPelajaran()
    {
        $pelajaran = $this->fungsi->user_login()->id_guru;
        $this->db->select('*');
        $this->db->from('t_detail_mapel');
        $this->db->join('t_mapel', 't_mapel.kode_mapel = t_detail_mapel.mapel_id');
        $this->db->join('t_kelas', 't_kelas.id_kelas = t_detail_mapel.kelas_id');
        $this->db->order_by('nama_kelas', 'asc');
        $this->db->where('guru_id', $pelajaran);
        return $this->db->get()->result();
        // return $this->db->get_where('t_detail_mapel', ['guru_id' => $pelajaran])->result();
    }
}
