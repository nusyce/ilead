<?php
defined('BASEPATH') or exit('No direct script access allowed');
require 'AdminControler.php';

class Start extends CI_Controller
{
    function __construct()
    {
        $key = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
        if ($key == 'fr') {
            $lann = 'french';
        } else {
            $lann = 'english';
        }

        $this->lang->load($key . '_lang', $lann);

        parent::__construct();
        $this->load->model('Plans_model', 'plans');

    }

    public function index()
    {
        $data['plans'] = $this->plans->get_all();
        $this->load->view('home/home', $data);
    }


    public function dashboard()
    {
        $this->load->view('admin/dashboard/dashboard');
    }
}
