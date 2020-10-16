<?php

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model','user');
        $this->load->model('User_roles_model');
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
            $this->User_roles_model->get_all();
            $result = $this->user->login($data);
            if($result) {
                $admin_data = array(
                    'user_logged_in' => true,
                    'user_id' => $result['id'],
                    'user_role_id' => $result['role_id'],
                    'user_role' => $this->User_roles_model->get_role_by_id($result['role_id'])->name,

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
                'cluster' => $this->input->post('cluster'),
                'sponsor' => $this->input->post('sponsor'),
                'password' =>  password_hash($this->input->post('password'), PASSWORD_BCRYPT),
                'country_id' => $this->input->post('country'),
                'created_at' => date('Y-m-d : h:m:s'),
                'updated_at' => date('Y-m-d : h:m:s'),
            );
            $user = $this->user->register($data);

            redirect(base_url('auth/login'));
        }else{
            $data['pack']=(!empty($_GET['pack'])) ?$_GET['pack']:'';
            $this->load->view('admin/auth/register',$data);
        }


    }
}