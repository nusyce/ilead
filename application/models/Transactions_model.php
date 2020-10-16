<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Transactions_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();

    }

    public function get($id = '')
    {
        /*if (get_user_role_id() == 1) {
            $this->db->where('user_id', get_user_id());
        } elseif (can_represente()) {
            $can = can_represente();
            $this->db->where('u.country_id', $can->country_id);
        }*/

        $this->db->select('tbl_transactions.id as id, due, tbl_transactions.status as status, amount,u.lastname as lastname, u.firstname as firstname, pl.name as plan, p.nom as mde_pement');
        $this->db->join('tbl_users as u', 'u.id = tbl_transactions.user_id', 'left');
        $this->db->join('tbl_plans as pl', 'pl.id = tbl_transactions.plan_id', 'left');
        $this->db->join('tbl_payments_modes as p', 'p.id = tbl_transactions.mode_paiement', 'left');

        if (is_numeric($id)) {
            $this->db->where('id', $id);
            $user = $this->db->get('tbl_transactions')->row();
            $user->country = $this->Misc_model->get_country($user->country_id);
        }
        return $this->db->get('tbl_transactions')->result_array();
    }


}
