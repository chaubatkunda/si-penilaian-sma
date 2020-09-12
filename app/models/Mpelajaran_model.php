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

        // $this->db->select('*');
        // $this->db->from('t_mapel');
        // $this->db->join('t_detail_mapel', 't_detail_mapel.mapel_id = t_mapel.kode_mapel', 'right');
        // return $this->db->get()->result();
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
        // return $this->db->get_where('t_detail_mapel', ['mapel_id' => $id])->row();

        $this->db->select('*');
        $this->db->from('t_mapel');
        $this->db->join('t_detail_mapel', 't_detail_mapel.mapel_id = t_mapel.kode_mapel');
        $this->db->where('t_mapel.kode_mapel', $id);
        return $this->db->get()->row();
    }

    public function insert_data()
    {
        // $datam = [
        //     'kode_mapel'    => $this->input->post('kodemp', true),
        //     'nama_mapel'    => $this->input->post('namamp', true)
        // ];
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

        // return $this->db->get_where('t_mapel', ['kode_mapel' => $id])->row();
    }
    // public function getAllMapelGuruDet($id)
    // {
    //     $this->db->select('*');
    //     $this->db->from('t_mapel');
    //     $this->db->join('t_detail_mapel', 't_detail_mapel.mapel_id = t_mapel.kode_mapel');
    //     $this->db->join('t_guru', 't_guru.id_guru = t_detail_mapel.guru_id');
    //     $this->db->join('t_kelas', 't_kelas.sub_kelas = t_detail_mapel.kelas_id');
    //     $this->db->where('id_mapel', $id);
    //     return $this->db->get()->result();
    // }

    // public function (){;}

    public function get_kelas_tree($id)
    {
        // $sql = " SELECT MainKelas.id_kelas, MainKelas.nama_kelas, MainKelas.sub_kelas, MainKelas.kode_kelas AS Kelas, MainKelas.sub_kelas AS ParentKelas, COUNT(ChildKelas.id_kelas) as Child
        // FROM t_kelas AS MainKelas
        //  JOIN t_kelas AS ChildKelas ON ChildKelas.sub_kelas = MainKelas.id_kelas
        // WHERE MainKelas.sub_kelas = '$id'
        // GROUP BY MainKelas.id_kelas, MainKelas.nama_kelas
        // ORDER BY MainKelas.id_kelas ASC";

        // return $this->db->query($sql)->result();
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
