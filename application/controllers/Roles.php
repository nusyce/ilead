<?php

defined('BASEPATH') or exit('No direct script access allowed');
require 'AdminControler.php';

class Roles extends AdminControler
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_roles_model');
    }

    public function index()
    {
        $roles = $this->User_roles_model->get_all();
        $data['title'] = '';
        $data['roles'] = $roles;
        $this->load_view('role/manager', $data);
    }
}
