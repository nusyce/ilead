<?php
defined('BASEPATH') or exit('No direct script access allowed');
require 'AdminControler.php';


class File extends AdminControler
{

    public function __construct()
    {
        parent::__construct();

    }


    public function index()
    {
            echo $_GET['file'];
    }






}
