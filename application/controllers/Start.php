<?php
defined('BASEPATH') or exit('No direct script access allowed');
require 'AdminControler.php';

class Start extends AdminControler
{
    function __construct(){

        parent::__construct();
        //    auth_check(); // check login auth
        // $this->rbac->check_module_access();
        $this->load->model('Plans_model', 'plans');

    }

    public function index()
    {
        $data['plans'] = $this->plans->get_all();
        $this->load->view('home/home', $data);
    }


    public function dashboard()
    {
        $this->load_view('dashboard/dashboard');
    }
}
