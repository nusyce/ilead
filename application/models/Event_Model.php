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
        $this->db->where('event_id', $id);
        $result = $this->db->get('tbl_transactions')->get_result();
        if ($result) {
            return false;
        }
        $this->db->select('tbl_events');
        $this->db->where('id', $id);
        $this->db->delete('tbl_events');
        return true;
    }

    //retourne la liste des personnes ayant participer à une retraite
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

    //retourne la liste des transactions souscription liées à une retraite
    public function getAllTransaction($id)
    {
        $this->db->select('tbl_events.id,tbl_book_event.user_id,tbl_events.name as event_name,tbl_users.country_id as ctryid,tbl_users.whatsapp_phone as whatsapp, tbl_users.id as id,
        tbl_users.email,  tbl_events.start_date as start,tbl_transactions.id as t_id,tbl_transactions.plan_id,tbl_transactions.status as status,tbl_transactions.due as date,tbl_transactions.mode_paiement as paiement_mode,
        tbl_transactions.amount as amount,tbl_events.end_date as end,users.firstname as first, users.lastname as last');
        $this->db->join('tbl_events', 'tbl_events.id = tbl_transactions.event_id', 'inner');
        $this->db->join('tbl_book_event', 'tbl_book_event.event_id = tbl_events.id', 'inner');
        $this->db->join('tbl_users', 'tbl_users.id = tbl_book_event.user_id', 'inner');
        $this->db->where('tbl_transactions.event_id', $id);
        $this->db->where('tbl_transactions.type', "souscription");
        return $this->db->get('tbl_transactions')->result_array();

    }

    //retourne toutes les depenses liées à une retraite
    public function getAllDepense($id){
        $this->db->select('tbl_depenses.description as description,tbl_depenses.amount as amount,tbl_task.name as taskname,tbl_depenses.id as id');
        $this->db->join('tbl_events', 'tbl_events.id = tbl_depenses.event_id', 'inner');
        $this->db->join('tbl_task', 'tbl_task.id = tbl_depenses.task_id', 'inner');
        $this->db->where('tbl_events.id', $id);
        return $this->db->get('tbl_depenses')->result_array();
    }

    //retourne les fichiers liés à une retraite
    public function get_attachments($id,$ref)
    {
        $this->db->where('ref_id', $id);
        $this->db->where('ref', $ref);
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


    //retourne les évènements auxquels un utilisateur est affilié
    public function getMyEvenement($id){
        $this->db->select('id,name,start_date,end_date,description');
        $this->db->join('tbl_book_event as b', 'b.id = tbl_event.id', 'inner');
        $this->db->join('tbl_users as u', 'u.id = tbl_book_event.id', 'inner');
        if (is_numeric($id)) {
            $this->db->where('tbl_event.id', $id);
            $this->db->where('tbl_events.start_date>'.now());
            $evenement= $this->db->get('tbl_events')->result_array();
            return $evenement;
        }
        return $this->db->get('tbl_book_event')->result_array();
    }

    //retourne les autres retraites que l'utilisateur peut s'affilier
    public function getOtherEvenement($id){
        $result = $this->getMyEvenement($id);
        $ids = array();
        foreach ($result as $row){
            $ids[] = $row['id'];
        }
        $this->db->select('tbl_events');
        $this->db->where_not_in('id', $ids);
        return $this->db->get('tbl_events')->result_array();
    }

    //retourne le status de la requête: savoir si elle est déja passée ou non
    public function getEventStatus($id){
        $this->db->select('tbl_events');
        $this->db->where('id',$id);
        $row = $this->get('tbl_events')->row();
        if($row){
            if($row['end_date']<now()){
                return true;
            }
            else{
                return false;
            }
        }
    }
}
