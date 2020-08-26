<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelas_model extends CI_Model
{
    public function getAllKelas()
    {
        $this->db->order_by('nama_kelas', 'asc');
        return $this->db->get('t_kelas')->result();
    }
    public function detailKelas($id)
    {
        $this->db->select('*');
        $this->db->from('t_detail_kelas');
        $this->db->join('t_kelas', 't_kelas.kode_kelas = t_detail_kelas.kelas_id');
        $this->db->join('t_siswa', 't_siswa.nis= t_detail_kelas.siswa_id');
        $this->db->where('kelas_id', $id);
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

    public function insert_detail_kelas($data)
    {
        return $this->db->insert('t_detail_kelas', $data);
    }
}
