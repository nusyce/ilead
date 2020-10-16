<?php
defined('BASEPATH') or exit('No direct script access allowed');
require 'AdminControler.php';

class Paid extends CI_Controller
{
    function __construct()
    {
        
        parent::__construct();
        $this->load->model('Plans_model', 'plans');
        $this->load->model('User_model', 'user');
        $this->load->model('payment_modes_model', 'mode');

    }

    public function index()
    {
        $data['transation'] = $this->user->get_last_transaction();
        $data['modes'] = $this->mode->get();
        $data['representates'] = $this->user->get_user_representate();

        $this->load->view('home/paid',$data);
    }




}
