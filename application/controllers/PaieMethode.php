<?php

defined('BASEPATH') or exit('No direct script access allowed');
require 'AdminControler.php';

class PaieMethode extends AdminControler
{

    public function index()
    {
        $this->load_view('paie_method/manager');
    }
}
