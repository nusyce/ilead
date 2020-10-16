<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Plans_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();

    }


    public function get_all()
    {
        return $this->db->get('tbl_plans')->result_array();
    }

}
