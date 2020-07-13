<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function userLogin($username)
    {
        return $this->db->get_where('view_login', ['username' => $username])->row_array();
    }

    public function userSession($id)
    {
        $this->db->select('*');
        $this->db->from('t_user');
        $this->db->join('t_guru', 't_guru.user_id_guru = t_user.id_user','left');
        $this->db->where('t_user.id_user', $id);
        return $this->db->get()->row();
    }

    public function getUser()
    {
        return $this->db->get('t_user')->result_array();
    }
    public function simpanAkun()
    {
        $data = [
            'username' => $this->input->post('username', true),
            'password' => password_hash($this->input->post('password1', true), PASSWORD_DEFAULT),
            'level' => $this->input->post('level', true)
        ];
        return $this->db->insert('t_user', $data);
    }
}
