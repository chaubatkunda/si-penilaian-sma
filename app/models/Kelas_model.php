<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelas_model extends CI_Model
{
    public function getAllKelas()
    {
        $this->db->order_by('nama_kelas', 'asc');
        return $this->db->get('t_kelas')->result();
    }
    public function getAllSiswaBaru()
    {
        return $this->db->get_where('t_siswa', ['chek_siswa' => 1])->result();
    }
    public function getAllSiswaSebelas()
    {
        // return $this->db->get_where('t_siswa', ['chek_siswa' => 1])->result();

        $this->db->select('*');
        $this->db->from('t_detail_kelas_x');
        $this->db->join('t_siswa', 't_siswa.nis = t_detail_kelas_x.siswa_id');
        $this->db->where('siswa_chek', 1);
        return $this->db->get()->result();
    }
    public function getAllSiswaDuaBelas()
    {
        // return $this->db->get_where('t_siswa', ['chek_siswa' => 1])->result();
        $this->db->select('*');
        $this->db->from('t_detail_kelas_xi');
        $this->db->join('t_siswa', 't_siswa.nis = t_detail_kelas_xi.siswa_id');
        $this->db->where('siswa_chek', 1);
        return $this->db->get()->result();
    }

    public function detailKelasX($id)
    {
        $this->db->select('*');
        $this->db->from('t_detail_kelas_x');
        $this->db->join('t_kelas', 't_kelas.kode_kelas = t_detail_kelas_x.kelas_id');
        $this->db->join('t_siswa', 't_siswa.nis = t_detail_kelas_x.siswa_id');
        $this->db->where('kelas_id', $id);
        $this->db->where('siswa_chek', 1);
        return $this->db->get()->result();
    }
    public function detailKelasXI($id)
    {
        $this->db->select('*');
        $this->db->from('t_detail_kelas_xi');
        $this->db->join('t_kelas', 't_kelas.kode_kelas = t_detail_kelas_xi.kelas_id');
        $this->db->join('t_siswa', 't_siswa.nis= t_detail_kelas_xi.siswa_id');
        $this->db->where('kelas_id', $id);
        $this->db->where('siswa_chek', 1);
        return $this->db->get()->result();
        // return $this->db->get_where('');
    }
    public function detailKelasXII($id)
    {
        $this->db->select('*');
        $this->db->from('t_detail_kelas_xii');
        $this->db->join('t_kelas', 't_kelas.kode_kelas = t_detail_kelas_xii.kelas_id');
        $this->db->join('t_siswa', 't_siswa.nis= t_detail_kelas_xii.siswa_id');
        $this->db->where('kelas_id', $id);
        $this->db->where('siswa_chek', 1);
        return $this->db->get()->result();
        // return $this->db->get_where('');
    }
    public function simpanKelas()
    {
        $pil = $this->input->post('pilih_kelas', true);
        // $query = $this->db->get_where('t_kelas', ['kode_kelas' => $kodekolas])->num_rows();
        if ($pil) {
            $data = [
                'id_kelas'      => $this->fungsi->getIdKelas(),
                'kode_kelas'    => $this->input->post('kode_kls', true),
                'nama_kelas'    => $this->input->post('kelas', true),
                'sub_kelas'     => $pil
            ];
            return $this->db->insert('t_kelas', $data);
        } else {
            $data = [
                'id_kelas'      => $this->fungsi->getIdKelas(),
                'kode_kelas'    => $this->input->post('kode_kls', true),
                'nama_kelas'    => $this->input->post('kelas', true),
                'sub_kelas'     => ""
            ];
            return $this->db->insert('t_kelas', $data);
        }
    }

    public function insert_detail_kelasx($data)
    {
        return $this->db->insert('t_detail_kelas_x', $data);
    }
    public function updateSiswaBaru($kode_siswa)
    {
        $data = [
            'chek_siswa'    => 0
        ];
        return $this->db->update('t_siswa', $data, ['nis' => $kode_siswa]);
    }

    public function insert_detail_kelasxi($data)
    {
        return $this->db->insert('t_detail_kelas_xi', $data);
    }

    public function updateSiswaKelasX($kode_siswa)
    {
        $data = [
            'siswa_chek'    => 0
        ];
        return $this->db->update('t_detail_kelas_x', $data, ['siswa_id' => $kode_siswa]);
    }
    public function insert_detail_kelasxii($data)
    {
        return $this->db->insert('t_detail_kelas_xii', $data);
    }

    public function updateSiswaKelasXI($kode_siswa)
    {
        $data = [
            'siswa_chek'    => 0
        ];
        return $this->db->update('t_detail_kelas_xi', $data, ['siswa_id' => $kode_siswa]);
    }
}
