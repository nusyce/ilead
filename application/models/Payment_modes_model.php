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

    public function status($data)
    {
        $this->db->where('id', $data['id']);
        $us = $this->db->update('tbl_payments_modes', $data);
    }

}
