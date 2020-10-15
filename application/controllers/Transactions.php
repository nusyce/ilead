<?php

defined('BASEPATH') or exit('No direct script access allowed');
require 'AdminControler.php';

class Transactions extends AdminControler
{

    public function index()
    {
        $this->load_view('transactions/manager');
    }
}
