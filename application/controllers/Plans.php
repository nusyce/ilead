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
        has_permission();
        $data['data'] = $this->plans_model->get_all();
        $this->load_view('plan/manager', $data);
    }
}
