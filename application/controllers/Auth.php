<?php

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model','user');
    }

    public function index()
    {
        redirect(base_url() . 'auth/login');

    }

    public function login()
    {

        if ($this->input->post()) {
            $data = array(
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password')
            );
            $result = $this->user->login($data);
            if($result) {
                $admin_data = array(
                    'user_logged_in' => true,
                    'user_id' => $result['id'],
                    'user_role' => $result['role_id'],

                );
                $this->session->set_userdata($admin_data);
                redirect(base_url('start/dashboard'));
            }

        }else{
            $this->load->view('admin/auth/login');
        }

    }

    public function register()
    {


        if ($this->input->post()) {
            $data = array(
                'email' => $this->input->post('email'),
                'firstname' => $this->input->post('name'),
                'whatsapp_phone' => $this->input->post('whatsapp'),
                'role_id' => 1, // By default i putt role is 2 for registraiton
                'email' => $this->input->post('email'),
                'password' =>  password_hash($this->input->post('password'), PASSWORD_BCRYPT),
                'country_id' => $this->input->post('country'),
                'created_at' => date('Y-m-d : h:m:s'),
                'updated_at' => date('Y-m-d : h:m:s'),
            );
            $user = $this->user->register($data);
            redirect(base_url('auth/login'));
        }else{
            $data['pack']=$_GET['pack'];
            $this->load->view('admin/auth/register',$data);
        }


    }
}