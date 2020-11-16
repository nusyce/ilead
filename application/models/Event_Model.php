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

    public function get_attachments($id)
    {
        $this->db->where('ref_id', $id);
        $this->db->where('ref', 'events');
        return $this->db->get('tbl_attachments')->result_array();
    }

    public function insert($data)
    {
        $my_data['name'] = $data['name'];
        $my_data['description'] = $data['description'];
        $my_data['start_date'] = $data['start_date'];
        $my_data['end_date'] = $data['end_date'];
        $my_data['created_at'] = date('Y-m-d H:i:s');
        $my_data['updated_at'] = date('Y-m-d H:i:s');
        $this->db->insert('tbl_events', $my_data);
        return $this->db->insert_id();
    }

    public function participants($id)
    {
        $this->db->select('tbl_users.id,firstname,lastname,email,whatsapp_phone,sexe,cu.name as cluster,co.name as country,tbl_users.djp');
        $this->db->join('tbl_users', 'tbl_users.id = tbl_book_event.user_id', 'inner');
        $this->db->join('tbl_cluster as cu', 'cu.id = tbl_users.cluster', 'inner');
        $this->db->join('tbl_country as co', 'co.id = tbl_users.country_id', 'inner');
        $this->db->where('tbl_book_event.event_id', $id);
        return $this->db->get('tbl_book_event')->result_array();
    }

    public function update($data)
    {
        $my_data['name'] = $data['name'];
        $my_data['description'] = $data['description'];
        $my_data['start_date'] = $data['start_date'];
        $my_data['end_date'] = $data['end_date'];
        $my_data['updated_at'] = date('Y-m-d H:i:s');
        $this->db->where('id', $data['id']);
        $this->db->update('tbl_events', $data);
        return true;
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
        $this->db->select('tbl_book_event.event_id,tbl_book_event.user_id,tbl_events.name as event_name,tbl_events.start_date as start,tbl_events.end_date as end,tbl_users.firstname, tbl_users.lastname');
        $this->db->join('tbl_events', 'tbl_events.id = tbl_book_event.id', 'inner');
        $this->db->join('tbl_users', 'tbl_users.id = tbl_book_event.id', 'inner');
        if (is_numeric($id)) {
            $this->db->where('tbl_book_event.event_id', $id);
            $transaction = $this->db->get('tbl_book_event')->result_array();
            return $transaction;
        }
        return $this->db->get('tbl_book_event')->result_array();
    }

    public function getAllTransaction($id)
    {
        $this->db->select('tbl_events.id,tbl_book_event.user_id,tbl_events.name as event_name,tbl_users.country_id as ctryid,tbl_users.whatsapp_phone as whatsapp, tbl_users.id as id,
        tbl_users.email,  tbl_events.start_date as start,tbl_transactions.id as t_id,tbl_transactions.plan_id,tbl_transactions.status as status,tbl_transactions.due as date,tbl_transactions.mode_paiement as paiement_mode,
        tbl_transactions.amount as amount,tbl_events.end_date as end,users.firstname as first, users.lastname as last');
        $this->db->join('tbl_events', 'tbl_events.id = tbl_transactions.event_id', 'inner');
        $this->db->join('tbl_book_event', 'tbl_book_event.event_id = tbl_events.id', 'inner');
        $this->db->join('tbl_users', 'tbl_users.id = tbl_book_event.user_id', 'inner');
        $this->db->where('tbl_transactions.event_id', $id);
        return $this->db->get('tbl_transactions')->result_array();

    }

    public function getAllDepense($id)
    {
        $this->db->select('tbl_depenses.description as description,tbl_depenses.amount as amount,tbl_task.name as taskname,tbl_depenses.id as id');
        $this->db->join('tbl_events', 'tbl_events.id = tbl_depenses.event_id', 'inner');
        $this->db->join('tbl_task', 'tbl_task.id = tbl_depenses.task_id', 'inner');
        $this->db->where('tbl_events.id', $id);
        return $this->db->get('tbl_depenses')->result_array();
    }

    public function add_attachments($id, $datapod)
    {
        $data['file_type'] = $datapod['file_type'];
        $data['name'] = $datapod['raw_name'];
        $data['ref'] = 'events';
        $data['ref_id'] = $id;
        $data['patch'] = $datapod['file_name'];
        $this->db->insert('tbl_attachments', $data);
        return true;
    }

    public function insert_depense($data)
    {
        $my_data['description'] = $data['description'];
        $my_data['amount'] = $data['amount'];
        $my_data['event_id'] = $data['event_id'];
        $my_data['task_id'] = $data['task_id'];
        $this->db->insert('tbl_depenses', $my_data);
        return $this->db->insert_id();
    }

    public function delete_depense($id)
    {

        $this->db->where('id', $id);
        $this->db->delete('tbl_depenses');
        return true;

    }

    public function getDepense($id)
    {
        $this->db->select('tbl_depenses.event.id,tbl_depenses.description as description, tbl_depenses.amount as amount,tbl_task.name as name');
        $this->db->join('tbl_events as e', 'e.id = tbl_depenses.event_id', 'inner');
        $this->db->join('tbl_task as t', 't.id = tbl_depenses.task_id', 'inner');
        $this->db->where('tbl_depenses.id', $id);
        return $this->db->get('tbl_depenses.id')->result_array();
    }

    public function getMyEvenement($id)
    {
        $sql = "SELECT * FROM tbl_events WHERE tbl_events.start_date > '" . date('Y-m-d H:i:s') . "'  and tbl_events.id in (select distinct event_id from tbl_book_event where user_id = " . $id . ")";
        return $this->db->query($sql)->result_array();
    }

    public function getOtherEvenement($id)
    {
        $sql = "SELECT * FROM tbl_events WHERE tbl_events.start_date > '" . date('Y-m-d H:i:s') . "'  and tbl_events.id not in (select distinct event_id from tbl_book_event where user_id = " . $id . ")";
        return $this->db->query($sql)->result_array();
    }

}
