<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Plans_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();

    }

    /**
     * @param  string Email address for login
     * @param  string User Password
     * @param  boolean Set cookies for user if remember me is checked
     * @param  boolean Is Staff Or Client
     * @return boolean if not redirect url found, if found redirect to the url
     */

    public function get_all()
    {
        return $this->db->get('tbl_plans')->result_array();
    }


    public function get_plan_by_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('tbl_plans')->row();
    }

    public function get_plan_above_this($id)
    {
        $this->db->where('id >= ', $id);
        return $this->db->get('tbl_plans')->result_array();
    }
    /**
     * @param  boolean If Client or Staff
     * @return none
     */

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
