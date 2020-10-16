<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Misc_model');

    }

    public function get($id = '', $where = [])
    {
      //  $this->db->select('firstname', 'lastname', 'country_id', 'profession', 'whatsapp_phone', 'cluster', 'sponsor');
        if (is_numeric($id)) {
            $this->db->where('id', $id);
            $user = $this->db->get('tbl_users')->row();
            $user->country = $this->Misc_model->get_country($user->country_id);
        }
        return $this->db->get('tbl_users')->result_array();
    }


    public function login($data)
    {

        $this->db->from('tbl_users');
        $this->db->where('email', $data['email']);

        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return false;
        } else {
            $result = $query->row_array();
            $validPassword = password_verify($data['password'], $result['password']);
            if ($validPassword) {
                return $result = $query->row_array();
            }
        }
    }


    public function register($data)
    {
        $this->db->insert('tbl_users', $data);
        $insert = $this->db->insert_id();
        $this->codeGeneratorKey($insert);
    }

    public function get_user_by_email($email)
    {
        $this->db->where('email', $email);
        return $this->db->get('tbl_users')->row();
    }

    public function get_user_by_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('tbl_users')->row();
    }


    public function logout()
    {

    }


    public function codeGeneratorKey($user_id)
    {
        $key = 0000 + $user_id;
        $this->db->where('id', $user_id);
        $data = [];
        $data['key'] = $key;
        $this->db->update('tbl_users', $data);

    }


}
