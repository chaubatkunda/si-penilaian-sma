<?php
function is_login()
{
    $lg = &get_instance();
    $login = $lg->session->userdata('id');
    if (!$login) {
        redirect('auth');
    }
}
