<?php

class Auth extends CI_Controller
{
    public function __construct()
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
        $this->load->model('User_model','user');
        $this->load->model('User_roles_model');
        $this->load->model('Plans_model', 'plans');
    }

    public function index()
    {
        redirect(base_url() . 'auth/login');

    }

    public function login()
    {

        if ($this->input->post()) {
            $data = array(
                'cle' => $this->input->post('key'),
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
                    'user_mail' => $result['email'],
                    'user_name' => $result['firstname'],
                    'cle' => $result['cle'],
                    'djp' => $result['djp'],
                    'country' => $result['country_id'],

                );
                $this->session->set_userdata($admin_data);
                redirect(base_url('start/dashboard'));
            }else{
                $this->session->set_flashdata('danger', 'Données érronées');
                redirect(base_url('auth/login'));
            }

        }else{

            $this->load->view('admin/auth/login');
        }

    }
    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url('auth/login'), 'refresh');
    }
    public function get_sponsor_name()
    {

         echo $this->user->get_user_by_key($_GET['cle']);
    }

    public function register()
    {


        if ($this->input->post()) {
            if (!$this->user->get_user_by_key($this->input->post('sponsor')))
            {
                $this->session->set_flashdata('danger', 'sponsor inconnu');
           redirect(base_url('auth/register'));
            }
            $pass=substr(md5(microtime()),rand(0,26),5);
            $data = array(
                'email' => $this->input->post('email'),
                'firstname' => $this->input->post('name'),
                'whatsapp_phone' => $this->input->post('whatsapp'),
                'role_id' => 1, // By default i putt role is 2 for registraiton
                'email' => $this->input->post('email'),
                'cluster' => $this->input->post('cluster'),
                'sponsor' => $this->input->post('sponsor'),
                'lastname' => $this->input->post('lastname'),
                'password' =>  password_hash($this->input->post('password'), PASSWORD_BCRYPT),
                'country_id' => $this->input->post('country'),
                'sexe' => $this->input->post('sexe'),
                'created_at' => date('Y-m-d : h:m:s'),
                'updated_at' => date('Y-m-d : h:m:s'),
            );
            $user = $this->user->register($data, $pass);
            $this->session->set_flashdata('success', 'Enregistré avec succes');
            redirect(base_url('auth/login'));
        }else{
            $data['plans'] = $this->plans->get_all();
            $data['pack']=(!empty($_GET['pack'])) ?$_GET['pack']:'';
            $this->load->view('admin/auth/register',$data);
        }


    }
}