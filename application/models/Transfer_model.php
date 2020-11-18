<?php


class Transfer_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function save($data){
        $this->db->insert('tbl_transfert', $data);
        $this->db->where('user_id', $data['user_id']);
        $result = $this->db->get('tbl_transfert')->result_array();
        $somme = 0;
        foreach ($result as $item) {
            $somme = $somme + $item['mount'];
        }
        update_user_meta($data['user_id'], 'transfert', $somme);
    }

    public function get_transfert_by_user($id){
        $this->db->where('id', $id);
        $result = $this->db->get('tbl_transfert')->result_array();
        $somme = 0;
        foreach ($result as $item) {
            $somme = $somme + $item['amount'];
        }
    }

}