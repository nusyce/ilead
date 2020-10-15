<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Payment_modes_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();

    }

    public function get($id = '', $where = [])
    {

        if (is_numeric($id)){
            $this->db->where('id', $id);
            return $this->db->get('tbl_payments_modes')->row();
        }
        return $this->db->get('tbl_payments_modes')->result_array();
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
