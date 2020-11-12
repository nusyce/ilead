<?php
defined('BASEPATH') or exit('No direct script access allowed');
require 'AdminControler.php';

class Paid extends CI_Controller
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

       $this->lang->load($lann, $lann);
        $this->load->model('Plans_model', 'plans');
        $this->load->model('User_model', 'user');
        $this->load->model('payment_modes_model', 'mode');
        $this->load->model('Misc_model', 'misc');

    }

    public function index()
    {
        $data['transation'] = $this->user->get_last_transaction();
        $data['modes'] = $this->mode->get();
        $data['representates'] = $this->user->get_user_representate();
        $data['country'] = $this->misc->get_country(get_user_country());
        $this->load->view('home/paid',$data);
    }




}
