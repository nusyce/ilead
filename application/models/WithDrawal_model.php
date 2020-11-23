<?php

defined('BASEPATH') or exit('No direct script access allowed');

class WithDrawal_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();

    }


    public function get_all()
    {
        return $this->db->get('tbl_withdrawal')->result_array();
    }

    public function get_all_of_user()
    {
        $this->db->where('user_id',get_user_id());
        return $this->db->get('tbl_withdrawal')->result_array();
    }

    public function insert($data){
        $this->db->insert('tbl_withdrawal',$data);
    }

    public  function approuve($id){
        $data = array();
        $this->db->where('id',$id);
        $retrait = $this->db->get('tbl_withdrawal')->row();
        $retrait->status = 1;
        $data['status'] = 1;
        $this->db->where('id',$id);
        $this->db->update('tbl_withdrawal', $data);
    }

    public  function block($id){
        $data = array();
        $this->db->where('id',$id);
        $retrait = $this->db->get('tbl_withdrawal')->row();
        $retrait->status = 2;
        $data['status'] = 2;
        $this->db->where('id',$id);
        $this->db->update('tbl_withdrawal', $data);
    }

}
