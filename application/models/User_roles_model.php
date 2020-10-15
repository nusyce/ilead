<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User_roles_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();

    }

    /**
     * @param string Email address for login
     * @param string User Password
     * @param boolean Set cookies for user if remember me is checked
     * @param boolean Is Staff Or Client
     * @return boolean if not redirect url found, if found redirect to the url
     */

    public function get_all()
    {
        return $this->db->get('tbl_roles')->result_array();
    }

}
