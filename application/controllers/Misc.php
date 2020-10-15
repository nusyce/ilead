<?php
defined('BASEPATH') or exit('No direct script access allowed');
require 'AdminControler.php';

class Misc extends AdminControler
{
    function __construct(){

        parent::__construct();

    }

    public function countries()
    {
        $data['title'] = '';
        $this->load->view('country/manager', $data);
    }


}
