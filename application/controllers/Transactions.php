<?php

defined('BASEPATH') or exit('No direct script access allowed');
require 'AdminControler.php';

class Transactions extends AdminControler
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Transactions_model');

    }

    public function index()
    {
        $data['data'] = $this->Transactions_model->get();
        $this->load_view('transactions/manager', $data);
    }



    public function detail($id)
    {
        $data['data'] = $this->Transactions_model->get($id);
        $this->load_view('transactions/transaction', $data);
    }
}
