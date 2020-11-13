<?php


class Event_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();

    }

    public function get($id = '')
    {
        if (is_numeric($id)) {
            $this->db->where('id', $id);
            $event = $this->db->get('tbl_events')->row();
            $event->attachment = $this->get_attachments($event->id);
            return $event;
        }
        return $this->db->get('tbl_events')->result_array();
    }

    public function insert($data)
    {
        $this->db->insert('tbl_events', $data);
    }

    public function update($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('tbl_events', $data);
    }

    public function delete($id)
    {
        $this->db->select('tbl_transactions');
        $this->db->where('event_id', $id);
        $result = $this->db->get('tbl_transactions');
        if ($result) {
            return false;
        }
        $this->db->select('tbl_events');
        $this->db->where('id', $id);
        $this->db->delete('tbl_events');
        return true;
    }

    public function getAllParticipate($id)
    {
        $this->db->select('tbl_book_event.event_id,tbl_book_event.user_id,tbl_events.name as event_name,tbl_events.start_date as start,tbl_events.end_date as end,u.firstname, u.lastname');
        $this->db->join('tbl_events as e', 'e.id = tbl_book_event.id', 'inner');
        $this->db->join('tbl_users as u', 'u.id = tbl_book_event.id', 'inner');
        if (is_numeric($id)) {
            $this->db->where('tbl_book_event.event_id', $id);
            $transaction = $this->db->get('tbl_book_event');
            return $transaction;
        }
        return $this->db->get('tbl_book_event')->result_array();
    }

    public function getAllTransaction($id)
    {
        $this->db->select('tbl_events.id,tbl_book_event.user_id,tbl_events.name as event_name,tbl_users.country_id as ctryid,tbl_whatsapp_phone as whatsapp
        tbl_users.email,
        tbl_events.start_date as start,transactions.id as t_id,transactions.plan_id,transactions.status as status,transactions.due as date,transactions.mode_paiement as paiement_mode,
        transactions.amount as amount,tbl_events.end_date as end,users.firstname as first, users.lastname as last');
        $this->db->join('tbl_transactions as t', 't.event_id = tbl_events.id', 'inner');
        $this->db->join('tbl_users as u', 'u.id = tbl_book_event.id', 'inner');
        if (is_numeric($id)) {
            $this->db->where('tbl_book_event.event_id', $id);
            $transaction = $this->db->get('tbl_book_event');
            return $transaction;
        }
        return $this->db->get('tbl_book_event')->result_array();
    }

    public function get_attachments($id)
    {
        $this->db->where('ref_id', $id);
        $this->db->where('ref', 'events');
        return $this->db->get('tbl_attachments')->result_array();
    }


    public function getDepense($id)
    {
        $this->db->select('tbl_depenses.event.id,tbl_depenses.description as description, tbl_depenses.amount as amount,tbl_task.name as name');
        $this->db->join('tbl_events as e', 'e.id = tbl_depenses.event_id', 'inner');
        $this->db->join('tbl_task as t', 't.id = tbl_depenses.task_id', 'inner');
        $this->db->where('tbl_depenses.id', $id);
        return $this->db->get('tbl_depenses.id')->result_array();
    }

}
