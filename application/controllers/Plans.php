<?php

defined('BASEPATH') or exit('No direct script access allowed');
require 'AdminControler.php';

class Plans extends AdminControler
{

    public function __construct()
    {
        parent::__construct();
        has_permission();
        $this->load->model('plans_model');
    }


    public function index()
    {
        if(get_user_role_id()!=4){
            redirect('start/dashboard');
        }
        has_permission();
        $data['data'] = $this->plans_model->get_all();
        $this->load_view('plan/manager', $data);
    }
}
