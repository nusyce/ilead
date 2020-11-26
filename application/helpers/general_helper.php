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
function delete_file($id)
{
    if (get_user_role_id() != 2 && get_user_role_id() != 4)
        return false;
    $CI = &get_instance();
    $CI->db->where('id', $id);
    $file= $CI->db->get('tbl_attachments')->row();
    unlink('uploads/'.$file->ref.'/'.$file->ref_id.'/'.$file->patch);
    $CI->db->where('id', $id);
    $rest =  $CI->db->delete('tbl_attachments');
    if ($rest) {
        return $rest;
    } else {
        return false;
    }
}
function ip_info($ip = NULL, $purpose = "location", $deep_detect = TRUE)
{
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
    $purpose = str_replace(array("name", "\n", "\t", " ", "-", "_"), NULL, strtolower(trim($purpose)));
    $support = array("country", "countrycode", "state", "region", "city", "location", "address");
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
                        "city" => @$ipdat->geoplugin_city,
                        "state" => @$ipdat->geoplugin_regionName,
                        "country" => @$ipdat->geoplugin_countryName,
                        "country_code" => @$ipdat->geoplugin_countryCode,
                        "continent" => @$continents[strtoupper($ipdat->geoplugin_continentCode)],
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

    if (get_user_role_id() != 2 && get_user_role_id() != 4 )
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

    $current_plan_id = get_instance()->session->userdata('user_plan_id');

    $amount = 0;
    if ($current_plan_id == 1 & $selected_plan_id == 2) {
        $amount = get_option("clasic_to_vip");
    } elseif ($current_plan_id == 1 & $selected_plan_id == 3) {
        $amount = get_option("clasic_to_platinium");
    } elseif ($current_plan_id == 2 & $selected_plan_id == 3) {
        $amount = get_option("vip_to_platinium");
    } elseif ($current_plan_id == 1 & $selected_plan_id == 1) {
        $amount = get_option("clasic_to_clasic");
    } elseif ($current_plan_id == 2 & $selected_plan_id == 2) {
        $amount = get_option("vip_to_vip");
    } elseif ($current_plan_id == 3 & $selected_plan_id == 3) {
        $amount = get_option("platinium_to_platinium");
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


function update_option($name, $value)
{
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


function get_user_meta($user_id, $name, $default = '')
{
    $name = trim($name);
    $CI = &get_instance();
    // is not auto loaded
    $CI->db->select('value');
    $CI->db->where('name', $name);
    $CI->db->where('user_id', $user_id);
    $row = $CI->db->get('tbl_meta_user')->row();
    if ($row) {
        return $row->value;
    } else {
        return $default;
    }
}

function delete_user_meta($user_id, $name)
{
    $CI = &get_instance();
    $CI->db->where('name', $name);
    $CI->db->where('user_id', $user_id);
    $CI->db->delete('tbl_meta_user');

    return (bool)$CI->db->affected_rows();
}


function formatted_date($date)
{
    return date('d/m/Y', strtotime($date));
}

function formatted_date_time($date)
{
    return date('d/m/Y H:s', strtotime($date));
}

/**
 * Updates option by name
 *
 * @param string $name Option name
 * @param string $value Option Value
 * @return boolean
 */
function update_user_meta($user_id, $name, $value)
{
    if (!user_meta_exists($user_id, $name)) {
        return add_meta_user($user_id, $name, $value);
    }

    $CI = &get_instance();

    $CI->db->where('user_id', $user_id);
    $CI->db->where('name', $name);
    $data = ['value' => $value];
    $CI->db->update('tbl_meta_user', $data);

    if ($CI->db->affected_rows() > 0) {
        return true;
    }

    return false;
}

function user_meta_exists($user_id, $name)
{
    return total_rows('tbl_meta_user', [
            'user_id' => $user_id,
            'name' => $name,
        ]) > 0;
}


function add_meta_user($user_id, $name, $value = '')
{
    if (!user_meta_exists($user_id, $name)) {
        $CI = &get_instance();

        $newData = [
            'user_id' => $user_id,
            'name' => $name,
            'value' => $value,
        ];
        $CI->db->insert('tbl_meta_user', $newData);
        $insert_id = $CI->db->insert_id();
        if ($insert_id) {
            return true;
        }

        return false;
    }

    return false;
}


function user_balance_commission($user_id = 0)
{
    if ($user_id == 0) {
        $user_id = get_user_id();
    }

    $balance = get_user_meta($user_id, 'balance');
    if (empty($balance)) {
        $balance = 0;
        update_user_meta($user_id, 'balance', $balance);
    }
    return $balance;
}

function user_balance_validation($user_id = 0)
{
    if ($user_id == 0) {
        $user_id = get_user_id();
    }

    $balance = get_user_meta($user_id, 'balance_validation');
    if (empty($balance)) {
        $balance = 0;
        update_user_meta($user_id, 'balance_validation', $balance);
    }
    return $balance;
}

function user_balance_transfer($user_id = 0){
    if ($user_id == 0) {
        $user_id = get_user_id();
    }

    $balance = get_user_meta($user_id, 'transfert');
    if (empty($balance)) {
        $balance = 0;
        update_user_meta($user_id, 'transfert', $balance);
    }
    return $balance;
}

function user_free_ticket($user_id = 0)
{
    /*if ($user_id == 0) {
        $user_id = get_user_id();
    }
    $ticket = get_user_meta($user_id, 'ticket');
    if (empty($ticket)) {
        $ticket = 0;
        update_user_meta($user_id, 'ticket', $ticket);
    }
    return $ticket +1;*/
    if ($user_id == 0) {
        $user_id = get_user_id();
    }
    $CI = &get_instance();
    $CI->db->where('tbl_free_tickets.user_id', $user_id);
    $CI->db->where('tbl_free_tickets.is_used', 0);
    $tickets = $CI->db->get('tbl_free_tickets')->result_array();
    return count($tickets);
}
function get_plan_name($id)
{

    $CI = &get_instance();
    $CI->db->where('id', $id);
    $plan = $CI->db->get('tbl_plans')->row();
    return $plan->name;
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

function event_status($event)
{
    $CI = &get_instance();
    $CI->db->where('id', $event);
    $event = $CI->db->get('tbl_events')->row();
    $start_date = strtotime($event->start_date);
    $end_date = strtotime($event->end_date);
    $curent_date = time();
    if ($start_date > $curent_date) {
        return 'a_venir';
    } else if ($end_date < $curent_date) {
        return 'passe';
    } else {
        return 'en_cours';
    }
}


    function secure_route()
    {
        if(get_user_role_id()!=2 && get_user_role_id()!=4){
            redirect('start/dashboard');
        }
    }
function event_flag($event)
{
    $satus = event_status($event);
    $class = '';
    if ($satus == 'a_venir') {
        $class = 'comming-event';
        $msg = 'Evenement à venir';
    } else if ($satus == 'en_cours') {
        $class = 'online-event';
        $msg = 'Evenement en cours';
    } else if ($satus == 'passe') {
        $class = 'passs-event';
        $msg = 'Evenement passé';
    }
    echo '<span data-toggle="tooltip" data-placement="top" title="' . $msg . '" class="status-event ' . $class . '"></span>';
}

function event_point($status)
{
    $class = '';
    if ($status == 0) {
        $class = 'comming-event';
        $msg = 'En attente de validation';
    } else if ($status == 1) {
        $class = 'online-event';
        $msg = 'Retrait validé';
    } else if ($status == 2) {
        $class = 'passs-event';
        $msg = 'Retrait refusé';
    }
    echo '<span data-toggle="tooltip" data-placement="top" title="' . $msg . '" class="status-event ' . $class . '"></span>';
}


function get_user_sponsor($user_id = 0)
{
    if ($user_id == 0) {
        $user_id = get_user_id();
    }
    $CI = &get_instance();
    $CI->db->where('id', $user_id);
    $CI->db->from('tbl_users');
    $user = $CI->db->get()->row();
    if (!empty($user->sponsor)) {
        $CI->db->where('cle', $user->sponsor);
        $CI->db->from('tbl_users');
        $sponsor = $CI->db->get()->row();
    }
    return $sponsor;
}

function genererate_tiket()
{

}

function isExpired($user)
{
    if (!$user->expiration)
        return false;
    if (strtotime($user->expiration) < time()) {
        return true;
    }
    return false;
}

function __price($amount, $currency = 'F CFA')
{
    return number_format($amount, $decimals = 0, $dec_point = ",", $thousands_sep = " ") . ' ' . $currency;
}