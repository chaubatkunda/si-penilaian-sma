<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nilai_model extends CI_Model
{
    public function getAllNilai()
    {
        // $this->db->select('*');
        // $this->db->from('t_nilai');
        // // $this->db->join('t_mapel', 't_mapel.id_mapel = t_nilai.mapel_id');
        // $this->db->join('t_siswa', 't_siswa.nis = t_nilai.siswa_id');
        // // $this->db->order_by('t_mapel.nama_kelas', 'asc');
        return $this->db->get('t_siswa')->result();
    }
    // public function getAllNilaiSIswa($id)
    // {
    //     return $this->db->get_where('t_siswa', ['kelas_id' => $id])->result();
    // }
    public function insert_nilai($id)
    {
        $kelas = $this->input->post('kelas', true);
        $nilai = $this->input->post('nilai', true);
        $mapel = $this->input->post('mapel', true);
        $siswa  = $this->input->post('siswa', true);
        $kd     = $this->input->post('kd', true);
        $thn     = $this->input->post('tahun', true);

        // $mapel = $this->input->post('mapel', true);

        $con = count($nilai);
        for ($i = 0; $i < $con; $i++) {
            $data = [
                'kelas_id'  => $kelas[$i],
                'mapel_id'  => $mapel[$i],
                'siswa_id'  => $siswa[$i],
                'thn_ajaran_id' => $thn,
                'kd_id'     => $kd[$i],
                'nilai'     => $nilai[$i]
            ];

            $this->db->insert('t_nilai', $data);

            $this->db->delete('t_nilai', ['nilai' => 0]);
            // var_dump("Benar");
            // die;
        }
    }

    public function detailKelas($id, $tahun)
    {
        // $this->db->select('*');
        // $this->db->from('t_detail_kelas');
        // $this->db->join('t_kelas', 't_kelas.kode_kelas = t_detail_kelas.kelas_id');
        // $this->db->join('t_siswa', 't_siswa.nis = t_detail_kelas.siswa_id');
        // // $this->db->join('t_thn_ajaran', 't_thn_ajaran.id = t_detail_kelas.tahun_ajaran_id');
        // $this->db->where('kelas_id', $id);
        // // $this->db->where('tahun_ajaran_id', $tahun);
        // return $this->db->get()->result();

        $this->db->select('*');
        $this->db->from('t_detail_kelas');
        // $this->db->join('t_kelas', 't_kelas.kode_kelas = t_detail_kelas.kelas_id', 'right');
        // $this->db->join('t_mapel', 't_mapel.kode_mapel = t_nilai.mapel_id');
        $this->db->join('t_siswa', 't_siswa.nis = t_detail_kelas.siswa_id');
        $this->db->join('t_thn_ajaran', 't_thn_ajaran.id = t_detail_kelas.tahun_ajaran_id');
        $this->db->where('kelas_id', $id);
        $this->db->where('tahun_ajaran_id', $tahun);
        return $this->db->get()->result();

        // $this->db->select('*');
        // $this->db->from('t_nilai');
        // $this->db->join('t_mapel', 't_mapel.kode_mapel = t_nilai.mapel_id');
        // $this->db->join('t_siswa', 't_siswa.nis = t_nilai.siswa_id');
        // $this->db->join('t_kelas', 't_kelas.kode_kelas = t_nilai.kelas_id');
        // $this->db->join('t_thn_ajaran', 't_thn_ajaran.id = t_nilai.thn_ajaran_id');
        // $this->db->where('kelas_id', $id);
        // $this->db->where('thn_ajaran_id', $tahun);
        // return $this->db->get()->result();
    }

    // public function nilaiKelasX($id)
    // {
    //     $this->db->select('*');
    //     $this->db->from('t_detail_kelas_x');
    //     $this->db->join('t_kelas', 't_kelas.kode_kelas = t_detail_kelas_x.kelas_id', 'right');
    //     // $this->db->join('t_mapel', 't_mapel.kode_mapel = t_nilai_kls_x.mapel_id');
    //     $this->db->join('t_siswa', 't_siswa.nis = t_detail_kelas_x.siswa_id');
    //     $this->db->where('kelas_id', $id);
    //     $this->db->where('siswa_chek', 1);
    //     return $this->db->get()->result();
    // }
    // public function nilaiKelasXI($id)
    // {
    //     $this->db->select('*');
    //     $this->db->from('t_detail_kelas_xi');
    //     $this->db->join('t_kelas', 't_kelas.kode_kelas = t_detail_kelas_xi.kelas_id', 'right');
    //     $this->db->join('t_siswa', 't_siswa.nis = t_detail_kelas_xi.siswa_id', 'right');
    //     $this->db->where('kelas_id', $id);
    //     return $this->db->get()->result();
    // }
}
