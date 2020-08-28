<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Waka_model extends CI_Model
{
    public function getAllwaka()
    {
        $this->db->select('*');
        $this->db->from('t_waka');
        $this->db->join('t_guru', 't_guru.id_guru = t_waka.guru_id');
        return $this->db->get()->result();
    }

    public function insert_waka($data)
    {
        return $this->db->insert('t_waka', $data);
    }
    public function update_wakaguru($idg, $datag)
    {
        return $this->db->update('t_guru', $datag, ['id_guru' => $idg]);
    }
    public function hapus_waka($id)
    {
        return $this->db->delete('t_waka', ['id_waka' => $id]);
    }

    public function guruPelajaran()
    {
        // $pelajaran = $this->fungsi->user_login()->id_guru;

        $this->db->select('*');
        $this->db->from('t_detail_mapel');
        $this->db->join('t_mapel', 't_mapel.kode_mapel = t_detail_mapel.mapel_id');
        $this->db->join('t_kelas', 't_kelas.id_kelas = t_detail_mapel.kelas_id');
        $this->db->order_by('nama_kelas', 'asc');
        // $this->db->where('guru_id', $pelajaran);
        return $this->db->get()->result();
        // return $this->db->get_where('t_detail_mapel', ['guru_id' => $pelajaran])->result();
    }
    public function guruPelajaranDet()
    {
        $pelajaran = $this->fungsi->user_login()->id_guru;
        // var_dump($pelajaran);
        // die;
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
