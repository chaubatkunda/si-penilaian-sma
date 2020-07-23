<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nilai_model extends CI_Model
{
    public function getAllNilai()
    {
        $this->db->select('*');
        $this->db->from('t_nilai');
        $this->db->join('t_mapel', 't_mapel.id_mapel = t_nilai.mapel_id');
        $this->db->join('t_siswa', 't_siswa.id = t_nilai.siswa_id');
        // $this->db->order_by('t_mapel.nama_kelas', 'asc');
        return $this->db->get()->result();
    }
    public function getAllNilaiSIswa($id)
    {
        return $this->db->get_where('t_siswa', ['kelas_id' => $id])->result();
    }
    public function insert_nilai()
    {
        $nilai = $this->input->post('nilai', true);
        $mapel = $this->input->post('mapel', true);
        $siswa  = $this->input->post('siswa', true);
        $kd     = $this->input->post('kd', true);

        // $mapel = $this->input->post('mapel', true);
        $con = count($nilai);
        for ($i = 0; $i < $con; $i++) {
            $data = [
                'mapel_id'  => $mapel[$i],
                'siswa_id'  => $siswa[$i],
                'kd_id'     => $kd[$i],
                'nilai'     => $nilai[$i]
            ];
            $this->db->insert('t_nilai', $data);
        }
        $this->db->delete('t_nilai', ['nilai' => 0]);
    }
}
