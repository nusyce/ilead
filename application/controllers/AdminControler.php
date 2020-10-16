<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminControler extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
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

