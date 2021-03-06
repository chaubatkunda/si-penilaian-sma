<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Fungsi
{
    protected $lb;
    function __construct()
    {
        $this->lb = &get_instance();
    }
    function user_login()
    {
        $id = $this->lb->session->userdata('id');
        return $this->lb->user->userSession($id);
    }

    function getSumIdUser()
    {
        $this->lb->db->select_max('id_user');
        return $this->lb->db->get('t_user')->row()->id_user + 1;
    }
    function getIdKelas()
    {
        $this->lb->db->select_max('id_kelas');
        return $this->lb->db->get('t_kelas')->row()->id_kelas + 1;
    }
    function getIdDetailKelas()
    {
        $this->lb->db->select_max('id');
        return $this->lb->db->get('t_detail_kelas')->row()->id + 1;
    }
    // function guruMapel($pelajaran)
    // {
    //     return $this->lb->user->guruPelajaran($pelajaran)->id_guru;
    // }
}
