<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Transactions_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();

    }
public function add($data)
{
    $this->db->insert('tbl_transactions', $data);
}
    public function get($id = '')
    {
        /*if (get_user_role_id() == 1) {
            $this->db->where('user_id', get_user_id());
        } elseif (can_represente()) {
            $can = can_represente();
            $this->db->where('u.country_id', $can->country_id);
        }*/

        $this->db->select('tbl_transactions.id as id, due,c.name as cluster,by_user_id, num_trans, tbl_transactions.status as status, amount,u.lastname as lastname, u.firstname as firstname, pl.name as plan, p.nom as mde_pement');
        $this->db->join('tbl_users as u', 'u.id = tbl_transactions.user_id', 'left');
        $this->db->join('tbl_plans as pl', 'pl.id = tbl_transactions.plan_id', 'left');
        $this->db->join('tbl_cluster as c', 'c.id = u.cluster', 'left');
        $this->db->join('tbl_payments_modes as p', 'p.id = tbl_transactions.mode_paiement', 'left');

        if (is_numeric($id)) {
            $this->db->where('tbl_transactions.id', $id);
            return $this->db->get('tbl_transactions')->row();
        }
        return $this->db->get('tbl_transactions')->result_array();
    }


    public function invoices($id = '')
    {
        if (is_numeric($id)) {
            $this->db->where('tbl_factures.id', $id);
            return $this->db->get('tbl_factures')->row();
        }
        return $this->db->get('tbl_factures')->result_array();
    }


    public function create_invoice($id)
    {
        $data = [];
        $data_ar = $this->get($id);

        $data['user'] = $data_ar->firstname;
        $data['plan'] = $data_ar->plan;
        $data['status'] = $data_ar->status;
        $data['due'] = $data_ar->due;
        $data['mode_paiement'] = $data_ar->mde_pement;
        $data['amount'] = $data_ar->amount;
        $data['by_user'] = get_user_name();
        $data['num_trans'] = $data_ar->num_trans;
        $this->db->insert('tbl_factures', $data);
    }
    public function numgeneratorcode($id)
    {
        $code = 00000 + $id;
        $code = str_pad($id, 5, "0", STR_PAD_LEFT); // 0010
        $code ='tr'.strval( $code );
        $this->db->where('id', $id);
        $data = [];
        $data['num_trans'] = $code;
        $this->db->update('tbl_transactions', $data);
        return $code;
    }

}
