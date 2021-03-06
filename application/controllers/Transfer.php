<?php

defined('BASEPATH') or exit('No direct script access allowed');
require 'AdminControler.php';

class Transfer extends AdminControler
{

    public function __construct()
    {
        parent::__construct();
        has_permission();
        $this->load->model('User_model');
        $this->load->model('Transfer_model');
        $this->load->model('Event_model');
    }


    public function index()
    {

        has_permission();
        $data['users'] = $this->User_model->get_all_paid();
        $data['data'] = $this->Transfer_model->get_all();
        $data['events'] = $this->Event_model->get();
        $this->load_view('transfer/transfer', $data);
    }

    public function save()
    {

        if ($this->input->post()) {

            $this->Transfer_model->save($_POST);
        }
        redirect('transfer');
    }
}
