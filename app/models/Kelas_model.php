<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelas_model extends CI_Model
{
    public function getAllKelas()
    {
        $this->db->order_by('nama_kelas', 'asc');
        return $this->db->get('t_kelas')->result();
    }
    public function getAllSiswa()
    {
        $this->db->where('chek_siswa', 1);
        return $this->db->get('t_siswa')->result();
    }

    public function detailKelas($id)
    {
        $this->db->select('*');
        $this->db->from('t_detail_kelas');
        $this->db->join('t_kelas', 't_kelas.kode_kelas = t_detail_kelas.kelas_id', 'right');
        $this->db->join('t_siswa', 't_siswa.nis = t_detail_kelas.siswa_id');
        $this->db->join('t_thn_ajaran', 't_thn_ajaran.id = t_detail_kelas.tahun_ajaran_id');
        $this->db->where('kelas_id', $id);
        $this->db->where('t_detail_kelas.chek_siswa', 1);
        // $this->db->where('tahun_ajaran_id', $tahun);
        return $this->db->get()->result();
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

    public function insert_detail_kelas($data)
    {
        return $this->db->insert('t_detail_kelas', $data);
    }

    public function delete_detail_kelas($id)
    {
        return $this->db->delete('t_detail_kelas', ['id_detail' => $id]);
    }
    public function tahunAjaranBaru()
    {
        $this->db->select('*');
        $this->db->from('t_thn_ajaran');
        $this->db->join('t_detail_thn_ajaran', 't_thn_ajaran.id = t_detail_thn_ajaran.thn_ajaran_id');
        // $this->db->where('t_thn_ajaran.id ');
        return $this->db->get()->result();
    }
    // Kelas Kelas
    public function getAllKelasLama()
    {
        $this->db->select('*');
        $this->db->from('t_kelas');
        // $this->db->join('t_detail_kelas', 't_detail_kelas.kelas_id = t_kelas.kode_kelas');
        // $this->db->where('id_kelas >', $id_kelas);
        return $this->db->get()->result();
    }
    public function update_siswaBaru($siswa)
    {
        $data = ['chek_siswa' => 0];
        return $this->db->update('t_siswa', $data, ['nis' => $siswa]);
    }
    public function update_naik($id)
    {
        $data = ['chek_siswa' => 0];
        return $this->db->update('t_detail_kelas', $data, ['id_detail' => $id]);
    }
    public function naikKelas($id)
    {
        $this->db->select('*');
        $this->db->from('t_detail_kelas');
        $this->db->join('t_kelas', 't_kelas.kode_kelas = t_detail_kelas.kelas_id');
        $this->db->join('t_siswa', 't_siswa.nis = t_detail_kelas.siswa_id');
        $this->db->where('id_detail', $id);
        return $this->db->get()->row();
    }

    public function tahunAjaran($kode)
    {
        $this->db->select('*');
        $this->db->from('t_thn_ajaran');
        // $this->db->join('t_detail_thn_ajaran', 't_thn_ajaran.id = t_detail_thn_ajaran.thn_ajaran_id');
        $this->db->where('id > ', $kode);
        return $this->db->get()->result();
    }
    public function kelas($id)
    {
        $this->db->select('*');
        $this->db->from('t_detail_kelas');
        $this->db->join('t_kelas', 't_kelas.kode_kelas = t_detail_kelas.kelas_id');
        $this->db->join('t_siswa', 't_siswa.nis = t_detail_kelas.siswa_id');
        $this->db->where('id_kelas >', $id);
        return $this->db->get()->result();
    }
}
