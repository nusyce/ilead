<?php
defined('BASEPATH') or exit('No direct script access allowed');
require 'AdminControler.php';

class Start extends AdminControler
{
    function __construct(){

        parent::__construct(); 

        $this->lang->load('english', 'lang');

        $this->load->model('Plans_model', 'plans');
        if(!is_user_logged_in())
        {
            redirect(base_url('auth/login'));
        }



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
