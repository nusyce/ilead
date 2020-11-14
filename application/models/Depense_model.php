<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Depense_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();

    }
    public function get($id)
    {
        $this->db->select('tbl_depenses.id as id, tbl_depenses.description,amount');
            $this->db->where('event_id', $id);
            $depenses = $this->db->get('tbl_depenses')->row();
            return $depenses;

    }
    public function insert($data)
    {
        $my_data['description'] = $data['description'];
        $my_data['event_id'] = $data['event_id'];
        $this->db->insert('tbl_depenses', $my_data);
        return $this->db->insert_id();
    }
    public function delete($id)
    {

        $this->db->where('id', $id);
        $this->db->delete('tbl_depenses');
        return true;

    }
    public function update($data)
    {
        $my_data['name'] = $data['name'];
        $this->db->where('id', $data['id']);
        $this->db->update('tbl_task', $data);
        return true;
    }


}