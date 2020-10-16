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
        $data['factures'] = $this->Transactions_model->invoices();
        $this->load_view('transactions/transaction', $data);
    }


    public function create_inv($id)
    {
        $this->Transactions_model->create_invoice($id);
        redirect(base_url('transactions/detail/' . $id));
    }
}
