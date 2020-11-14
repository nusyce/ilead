<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Task_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();

    }
    public function get($id = '')
    {
        if (is_numeric($id)) {
            $this->db->where('id', $id);
            $tasks = $this->db->get('tbl_task')->row();

            return $tasks;
        }
        return $this->db->get('tbl_task')->result_array();
    }
    public function insert($data)
    {
        $my_data['name'] = $data['name'];
        $this->db->insert('tbl_task', $my_data);
        return $this->db->insert_id();
    }
    public function delete($id)
    {

        $this->db->where('id', $id);
        $this->db->delete('tbl_task');
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