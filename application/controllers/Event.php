<?php
defined('BASEPATH') or exit('No direct script access allowed');
require 'AdminControler.php';


class Event extends AdminControler
{

    public function __construct()
    {
        parent::__construct();
        has_permission();
        $this->load->model('Event_Model');
    }


    public function index()
    {
            $data['data'] = $this->Event_Model->get();
            $this->load_view('event/liste', $data);
    }

    public function event($id)
    {
        if (!isset($_GET['navigation'])){
            $data['data'] = $this->Event_Model->get();
            $this->load_view('event/detail', $data);
        }

        else if ($_GET['navigation']=='expenses'){
            $data['data'] = $this->Event_Model->getAllTransaction($id);
            var_dump( $data['data']);
            $this->load_view('event/transaction', $data);
        }
    }

    public function delete_event($id)
    {
        $this->Event_Model->delete($id);
        redirect('event/index');
    }


    public function getParticipate($id){
        $data['data'] = $this->Event_Mode->getAllParticipate($id);
        $this->load_view('event/transaction/'.$id, $data);
    }






}
