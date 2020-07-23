<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Fungsi
{
    protected $lb;
    function __construct()
    {
        // parent::__construct();
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
}
