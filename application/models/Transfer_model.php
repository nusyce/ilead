<?php


class Transfer_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function save($data){
        $data['created_at']=date('Y-m-d H:s');
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
    public function get_all(){
        $this->db->select('tbl_transfert.id as id,tbl_transfert.mount as mount,tbl_transfert.description as description, e.name as event,u.lastname as lastname, u.firstname as firstname,tbl_transfert.created_at as created_at');
        $this->db->join('tbl_users as u', 'u.id = tbl_transfert.user_id', 'left');
        $this->db->join('tbl_events as e', 'e.id = tbl_transfert.event_id', 'left');
        $this->db->order_by("tbl_transfert.id", "desc");
        $result = $this->db->get('tbl_transfert')->result_array();
       return $result;
    }

}