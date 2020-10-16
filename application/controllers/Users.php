<?php

defined('BASEPATH') or exit('No direct script access allowed');
require 'AdminControler.php';

class Users extends AdminControler
{

    function __construct()
    {

        parent::__construct();
        $this->load->model('User_model');

    }

    public function index()
    {
        $data['data'] = $this->User_model->get();
        $this->load_view('user/manager', $data);
    }


    public function mychildren()
    {
        $this->load_view('user/adherents');
    }


    public function child()
    {
        $this->load_view('user/child');

    }

    public function profile()
    {
        $this->load_view('user/profile');

    }
}
