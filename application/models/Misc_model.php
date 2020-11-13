<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Misc_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();

    }

    public function get_country($id = '')
    {
        if (is_numeric($id)) {
            $this->db->where('id', $id);
            return $this->db->get('tbl_country')->row();
        }
        return $this->db->get('tbl_country')->result_array();
    }


}
