<?php

defined('BASEPATH') or exit('No direct script access allowed');
require 'AdminControler.php';

class Plans extends AdminControler
{

    public function index()
    {
        has_permission();
        $this->load_view('plan/manager');
    }
}
