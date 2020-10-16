<?php
defined('BASEPATH') or exit('No direct script access allowed');
require 'AdminControler.php';

class Start extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if (!get_user_lang()) {
            $key = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
            if ($key == 'fr') {
                $lann = 'french';
            } else {
                $lann = 'english';
            }
        } else {
            $lann = get_user_lang();
        }
        $this->lang->load($lann, $lann);

        $this->load->model('Plans_model', 'plans');

    }

    public function index()
    {
        $data['plans'] = $this->plans->get_all();
        $this->load->view('home/home', $data);
    }


    public function dashboard()
    {
        $data = [];
        $this->load->view('admin/includes/header', $data);
        $this->load->view('admin/includes/asides', $data);
        $this->load->view('admin/dashboard/dashboard');
        $this->load->view('admin/includes/footer', $data);
    }
}
