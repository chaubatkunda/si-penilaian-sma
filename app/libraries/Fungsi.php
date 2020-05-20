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
}
