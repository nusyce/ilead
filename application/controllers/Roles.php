<?php

defined('BASEPATH') or exit('No direct script access allowed');
require 'AdminControler.php';

class Roles extends AdminControler
{

    public function index()
    {
        $this->load_view('role/manager');
    }
}
