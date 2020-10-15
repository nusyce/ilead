<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();

    }
    public function login($data){

        $this->db->from('tbl_users');
        $this->db->where('email', $data['email']);

        $query = $this->db->get();
        if ($query->num_rows() == 0){
            return false;
        }
        else{
            $result = $query->row_array();
            $validPassword = password_verify($data['password'], $result['password']);
            if($validPassword){
                return $result = $query->row_array();
            }
        }
    }
    /**
     * @param  string Email address for login
     * @param  string User Password
     * @param  boolean Set cookies for user if remember me is checked
     * @param  boolean Is Staff Or Client
     * @return boolean if not redirect url found, if found redirect to the url
     */
    public function register($data)
    {
        $this->db->insert('tbl_users', $data);
        $insert_id = $this->db->insert_id();
        return true;
    }
    public function get_user_by_email($email)
    {
        $this->db->where('email', $email);
        return $this->db->get(db_prefix() . 'tbl_users')->row();
    }
    public function get_user_by_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get(db_prefix() . 'tbl_users')->row();
    }

    /**
     * @param  boolean If Client or Staff
     * @return none
     */
    public function logout($staff = true)
    {

    }

    /**
     * @param  integer ID to create autologin
     * @param  boolean Is Client or Staff
     * @return boolean
     */

    /**
     * Update user password from forgot password feature or set password
     * @param boolean $staff        is staff or contact
     * @param mixed $userid
     * @param string $new_pass_key the password generate key
     * @param string $password     new password
     */


}
