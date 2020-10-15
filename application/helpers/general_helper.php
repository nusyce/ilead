<?php
defined('BASEPATH') or exit('No direct script access allowed');
header('Content-Type: text/html; charset=utf-8');
function is_user_logged_in()
{
    return get_instance()->session->has_userdata('user_logged_in');
}

function get_user_id()
{
    if (!is_user_logged_in()) {
        return false;
    }

    return get_instance()->session->userdata('user_id');
}

function get_user_role()
{
    if (!is_user_logged_in()) {
        return false;
    }

    return get_instance()->session->userdata('user_role');
}


function countries()
{
    $CI = &get_instance();
    $CI->db->where('active', 1);
    $CI->db->from('tbl_country');
    return $CI->db->get()->result_array();

}