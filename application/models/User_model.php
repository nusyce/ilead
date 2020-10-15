<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();

    }

    public function get($id = '', $where = [])
    {

        if (is_numeric($id)){
            $this->db->where('id', $id);
            return $this->db->get('tbl_users')->row();
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
        return $this->db->insert_id();
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


}
