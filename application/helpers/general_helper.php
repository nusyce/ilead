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
function get_user_role_id()
{
    if (!is_user_logged_in()) {
        return false;
    }

    return get_instance()->session->userdata('user_role_id');
}

function countries($active = '')
{
    $CI = &get_instance();
    if (!empty($active))
        $CI->db->where('active', $active);
    $CI->db->from('tbl_country');
    return $CI->db->get()->result_array();
}
function get_country($id)
{

    $CI = &get_instance();
    // is not auto loaded

    $CI->db->where('id', $id);
    $row = $CI->db->get('tbl_country')->row();

        return $row;

}
function clusters($active = '')
{
    $CI = &get_instance();
    if (!empty($active))
        $CI->db->where('active', $active);
    $CI->db->from('tbl_cluster');
    return $CI->db->get()->result_array();
}




/**
 * Get option value
 * @param string $name Option name
 * @return mixed
 */
function get_option($name, $default = '')
{
    $name = trim($name);
    $CI = &get_instance();
    // is not auto loaded
    $CI->db->select('value');
    $CI->db->where('name', $name);
    $row = $CI->db->get('tbl_options')->row();
    if ($row) {
        return $row->value;
    } else {
        return $default;
    }
}


/**
 * Delete option
 * @param mixed $name option name
 * @return boolean
 * @since  Version 1.0.4
 */
function delete_option($name)
{
    $CI = &get_instance();
    $CI->db->where('name', $name);
    $CI->db->delete('tbl_options');

    return (bool)$CI->db->affected_rows();
}


/**
 * Updates option by name
 *
 * @param string $name Option name
 * @param string $value Option Value
 * @return boolean
 */
function update_option($name, $value)
{
    /**
     * Create the option if not exists
     * @since  2.3.3
     */
    if (!option_exists($name)) {
        return add_option($name, $value);
    }

    $CI = &get_instance();

    $CI->db->where('name', $name);
    $data = ['value' => $value];
    $CI->db->update('tbl_options', $data);

    if ($CI->db->affected_rows() > 0) {
        return true;
    }

    return false;
}

function option_exists($name)
{
    return total_rows('tbl_options', [
            'name' => $name,
        ]) > 0;
}

/**
 * Count total rows on table based on params
 * @param string $table Table from where to count
 * @param array $where
 * @return mixed  Total rows
 */
function total_rows($table, $where = [])
{
    $CI = &get_instance();
    if (is_array($where)) {
        if (sizeof($where) > 0) {
            $CI->db->where($where);
        }
    } elseif (strlen($where) > 0) {
        $CI->db->where($where);
    }

    return $CI->db->count_all_results($table);
}


function add_option($name, $value = '')
{
    if (!option_exists($name)) {
        $CI = &get_instance();

        $newData = [
            'name' => $name,
            'value' => $value,
        ];
        $CI->db->insert('tbl_options', $newData);
        $insert_id = $CI->db->insert_id();
        if ($insert_id) {
            return true;
        }

        return false;
    }

    return false;
}
