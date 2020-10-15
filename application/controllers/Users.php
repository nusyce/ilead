<?php

defined('BASEPATH') or exit('No direct script access allowed');
require 'AdminControler.php';

class Users extends AdminControler
{

    public function index()
    {
        $this->load_view('user/manager');
    }
    public function mychildren()
    {
        $this->load_view('user/adherents');
    }
}
