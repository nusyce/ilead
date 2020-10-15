<?php


require 'AdminControler.php';

class Auth extends AdminControler
{

    public function index()
    {
        redirect(base_url() . 'auth/login');
    }

    public function login()
    {
        $this->load_view('auth/login');
    }

    public function register()
    {
        $this->load_view('auth/register');

    }
}