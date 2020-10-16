<?php
defined('BASEPATH') or exit('No direct script access allowed');
require 'AdminControler.php';

class Start extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if (!get_user_lang()) {
            $key = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
            if ($key == 'fr') {
                $lann = 'french';
            } else {
                $lann = 'english';
            }
        } else {
            $lann = get_user_lang();
        }

        $this->lang->load($key . '_lang', $lann);
        $this->load->model('Plans_model', 'plans');
        $this->load->model('User_model', 'user');
        $this->load->model('payment_modes_model', 'mode');


    }

    public function index()
    {
        $data['plans'] = $this->plans->get_all();
        $this->load->view('home/home', $data);
    }


    public function dashboard()
    {
        if(get_user_djp()==0)
        {

            $data['transation'] = $this->user->get_last_transaction();
            $data['modes'] = $this->mode->get();
            $data['representates'] = $this->user->get_user_representate();

            $this->load->view('home/paid',$data);


        }
        else{
            $data = [];
            $this->load->view('admin/includes/header', $data);
            $this->load->view('admin/includes/asides', $data);
            $this->load->view('admin/dashboard/dashboard');
            $this->load->view('admin/includes/footer', $data);
        }

    }
}
