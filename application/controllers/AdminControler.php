<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminControler extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
        $key = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
        if ($key == 'fr') {
            $lann = 'french';
        } else {
            $lann = 'english';
        }

        $this->lang->load($key . '_lang', $lann);
        if (!is_user_logged_in()) {
            redirect(base_url() . 'auth/login');
        }
    }

    public function load_view($view, $data = [])
    {
        $this->load->view('admin/includes/header', $data);
        $this->load->view('admin/includes/asides', $data);
        $this->load->view('admin/' . $view, $data);
        $this->load->view('admin/includes/footer', $data);
    }
}

