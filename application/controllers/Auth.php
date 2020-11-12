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
        $this->load->library('form_validation');
    }

    public function index()
    {
        redirect(base_url() . 'auth/login');

    }
    public function login_key()
    {

        if ($this->input->post()) {

            $this->User_roles_model->get_all();
            $result = $this->user->get_user_by_key($this->input->post('key'));
            if($result) {
                $user=json_decode($result);

                if($user->djp!=0)
                {
                    $this->session->set_flashdata('danger', $this->lang->line('have_abonnement'));
                    redirect(base_url('auth/login'));
                }
                $admin_data = array(
                    'user_logged_in' => true,
                    'user_id' => $user->id,
                    'user_role_id' => $user->role_id,
                    'user_role' => $this->User_roles_model->get_role_by_id($user->role_id)->name,
                    'user_mail' => $user->email,
                    'user_name' => $user->firstname,
                    'cle' => $user->cle,
                    'djp' => $user->djp,
                    'country' => $user->country_id,

                );
                $this->session->set_userdata($admin_data);
                redirect(base_url('start/dashboard'));
            }else{
                $this->session->set_flashdata('danger', $this->lang->line('error_input'));
                redirect(base_url('auth/login_key'));
            }

        }else{

            $this->load->view('admin/auth/login_key');
        }

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
                $this->session->set_flashdata('danger', $this->lang->line('error_input'));
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
           $user=$this->user->get_user_by_key($this->input->post('sponsor'));
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('confirm_email', 'confirm_email', 'required|matches[email]');


            if($this->form_validation->run() == FALSE)
            {
                $this->session->set_flashdata('danger', $this->lang->line('error_mail_message'));
                redirect(base_url('auth/register'));
            }

            if (!$user)
            {

                $this->session->set_flashdata('danger', $this->lang->line('sponsor_inconnu'));
                redirect(base_url('auth/register'));
            }
            else
            {
                $user=json_decode($user);

                if($user->djp==0)
                {
                    $this->session->set_flashdata('danger', $this->lang->line('sponsor_invalid'));
                    redirect(base_url('auth/register'));
                }


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
                'plage_horaire' => $this->input->post('plage_horaire'),
                'exigences' => $this->input->post('exigences'),
                'created_at' => date('Y-m-d : h:m:s'),
                'updated_at' => date('Y-m-d : h:m:s'),
            );
            $user = $this->user->register($data, $pass);
            $this->session->set_flashdata('success', $this->lang->line('send_key').$this->input->post('email'));
            redirect(base_url('auth/login_key'));
        }else{
            $data['plans'] = $this->plans->get_all();
            $data['pack']=(!empty($_GET['pack'])) ?$_GET['pack']:'';
            $this->load->view('admin/auth/register',$data);
        }


    }
}