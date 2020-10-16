<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mpelajaran_model extends CI_Model
{
    public function ajaxKodeMapel($kode)
    {
        return $this->db->get_where('t_mapel', ['kode_mapel' => $kode])->row();
    }
    public function getAllMapel()
    {
        return $this->db->get('t_mapel')->result();
    }
    public function getAllMapelById($id)
    {
        return $this->db->get_where('t_mapel', ['kode_mapel' => $id])->row();
    }
    public function getAllMapelByKode($id)
    {
        return $this->db->get_where('t_mapel', ['id_mapel' => $id])->row();
    }
    public function getAllMapelByKodeGuru($id)
    {
        $this->db->select('*');
        $this->db->from('t_mapel');
        $this->db->join('t_detail_mapel', 't_detail_mapel.mapel_id = t_mapel.kode_mapel');
        $this->db->where('t_mapel.kode_mapel', $id);
        return $this->db->get()->row();
    }

    public function insert_data()
    {
        $kelas = $this->input->post('kelas_sub', true);
        for ($i = 0; $i < count($kelas); $i++) {
            $detmapel = [
                'guru_id'    => $this->input->post('guru', true),
                'kelas_id'   => $this->input->post('kelas_sub', true)[$i],
                'mapel_id'   => $this->input->post('kodemp', true),
                'thn_ajaran_id'   => $this->input->post('thn', true)
            ];
            $this->db->insert('t_detail_mapel', $detmapel);
        }
        // $this->db->insert('t_mapel', $datam);
        $this->db->delete('t_detail_mapel', ['kelas_id' => 0]);
    }
    public function insert_detmapel($detmapel)
    {
        return $this->db->insert('t_detail_mapel', $detmapel);
    }
    public function update_data($guruid, $data)
    {
        $this->db->update('t_detail_mapel', $data, ['guru_id' => $guruid]);
    }
    public function delete_data($id)
    {
        return $this->db->delete('t_mapel', ['id_mapel' => $id]);
    }
    public function getAllMapelGuru($id)
    {
        $this->db->select('*');
        $this->db->from('t_mapel');
        $this->db->join('t_detail_mapel', 't_detail_mapel.mapel_id = t_mapel.kode_mapel');
        $this->db->join('t_guru', 't_guru.id_guru = t_detail_mapel.guru_id');
        $this->db->join('t_kelas', 't_kelas.id_kelas = t_detail_mapel.kelas_id');
        $this->db->where('t_mapel.kode_mapel', $id);
        return $this->db->get()->row();
    }


    public function get_kelas_tree($id)
    {
        return $this->db->get_where('t_kelas', ['sub_kelas' => $id])->result();
    }

    public function getAllThnAjaran()
    {
        $this->db->select('*');
        $this->db->from('t_thn_ajaran');
        $this->db->join('t_detail_thn_ajaran', 't_detail_thn_ajaran.thn_ajaran_id = t_thn_ajaran.id');
        return $this->db->get()->result();
    }
}
