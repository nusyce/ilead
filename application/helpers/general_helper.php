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

function get_user_lastname()
{
    if (!is_user_logged_in()) {
        return false;
    }

    return get_instance()->session->userdata('last_name');
}

function get_user_djp()
{
    if (!is_user_logged_in()) {
        return false;
    }

    return get_instance()->session->userdata('djp');
}

function get_user_country()
{
    if (!is_user_logged_in()) {
        return false;
    }

    return get_instance()->session->userdata('country');
}

function get_user_role()
{
    if (!is_user_logged_in()) {
        return false;
    }

    return get_instance()->session->userdata('user_role');
}

function get_user_cle()
{
    if (!is_user_logged_in()) {
        return false;
    }

    return get_instance()->session->userdata('cle');
}

function get_user_lang()
{
    return get_instance()->session->userdata('lang');
}

function get_user_mail()
{
    if (!is_user_logged_in()) {
        return false;
    }

    return get_instance()->session->userdata('user_mail');
}

function get_user_name()
{
    if (!is_user_logged_in()) {
        return false;
    }

    return get_instance()->session->userdata('user_name');
}

function get_user_role_id()
{
    if (!is_user_logged_in()) {
        return false;
    }

    return (int)get_instance()->session->userdata('user_role_id');
}

function get_user_plan_id()
{
    if (!is_user_logged_in()) {
        return false;
    }

    return get_instance()->session->userdata('user_plan_id');
}

function get_user_plan()
{
    if (!is_user_logged_in()) {
        return false;
    }

    return get_instance()->session->userdata('user_plan');
}

function can_represente()
{
    if (get_user_role_id() != 3)
        return false;
    $CI = &get_instance();
    $CI->db->where('user_id', get_user_id());
    $CI->db->from('tbl_representates');
    $rest = $CI->db->get()->row();
    if ($rest) {
        return $rest;
    } else {
        return false;
    }
}

function ip_info($ip = NULL, $purpose = "location", $deep_detect = TRUE) {
    $output = NULL;
    if (filter_var($ip, FILTER_VALIDATE_IP) === FALSE) {
        $ip = $_SERVER["REMOTE_ADDR"];
        if ($deep_detect) {
            if (filter_var(@$_SERVER['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP))
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
            if (filter_var(@$_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP))
                $ip = $_SERVER['HTTP_CLIENT_IP'];
        }
    }
    $purpose    = str_replace(array("name", "\n", "\t", " ", "-", "_"), NULL, strtolower(trim($purpose)));
    $support    = array("country", "countrycode", "state", "region", "city", "location", "address");
    $continents = array(
        "AF" => "Africa",
        "AN" => "Antarctica",
        "AS" => "Asia",
        "EU" => "Europe",
        "OC" => "Australia (Oceania)",
        "NA" => "North America",
        "SA" => "South America"
    );
    if (filter_var($ip, FILTER_VALIDATE_IP) && in_array($purpose, $support)) {
        $ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
        if (@strlen(trim($ipdat->geoplugin_countryCode)) == 2) {
            switch ($purpose) {
                case "location":
                    $output = array(
                        "city"           => @$ipdat->geoplugin_city,
                        "state"          => @$ipdat->geoplugin_regionName,
                        "country"        => @$ipdat->geoplugin_countryName,
                        "country_code"   => @$ipdat->geoplugin_countryCode,
                        "continent"      => @$continents[strtoupper($ipdat->geoplugin_continentCode)],
                        "continent_code" => @$ipdat->geoplugin_continentCode
                    );
                    break;
                case "address":
                    $address = array($ipdat->geoplugin_countryName);
                    if (@strlen($ipdat->geoplugin_regionName) >= 1)
                        $address[] = $ipdat->geoplugin_regionName;
                    if (@strlen($ipdat->geoplugin_city) >= 1)
                        $address[] = $ipdat->geoplugin_city;
                    $output = implode(", ", array_reverse($address));
                    break;
                case "city":
                    $output = @$ipdat->geoplugin_city;
                    break;
                case "state":
                    $output = @$ipdat->geoplugin_regionName;
                    break;
                case "region":
                    $output = @$ipdat->geoplugin_regionName;
                    break;
                case "country":
                    $output = @$ipdat->geoplugin_countryName;
                    break;
                case "countrycode":
                    $output = @$ipdat->geoplugin_countryCode;
                    break;
            }
        }
    }
    return $output;
}

function _dd($date)
{
    return date('d/m/Y', strtotime($date));
}

function has_permission()
{
    if (get_user_role_id() !== 2)
        redirect('auth/login');
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

function get_country_by_iso($iso)
{
    $CI = &get_instance();
    $CI->db->where('iso', $iso);
    return $CI->db->get('tbl_country')->row();
}

function clusters($active = '')
{
    $CI = &get_instance();
    if (!empty($active))
        $CI->db->where('active', $active);
    $CI->db->from('tbl_cluster');
    return $CI->db->get()->result_array();
}

function get_plan_upgrade_price($selected_plan_id)
{
    if (!is_user_logged_in()) {
        return false;
    }

    $current_plan_id =  get_instance()->session->userdata('user_plan_id');

    $amount = 0;
    if($current_plan_id == 1 & $selected_plan_id == 2){
        $amount = get_option("clasic_to_vip");
    }elseif($current_plan_id == 1 & $selected_plan_id == 3){
        $amount = get_option("clasic_to_platinium");
    }elseif($current_plan_id == 2 & $selected_plan_id == 3){
        $amount = get_option("vip_to_platinium");
    }

    return $amount;
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
