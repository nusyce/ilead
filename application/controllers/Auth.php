<?php

class Auth extends CI_Controller
{

    public function index()
    {
        redirect(base_url() . 'auth/login');
    }

    public function login()
    {
        $this->load->view('admin/auth/login');
    }

    public function register()
    {
        $this->load->view('admin/auth/register');

    }
}