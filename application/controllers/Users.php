<?php

defined('BASEPATH') or exit('No direct script access allowed');
require 'AdminControler.php';

class Users extends AdminControler
{

    function __construct()
    {

        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Plans_model', 'plans');
    }

    public function index()
    {
        has_permission();
        $data['data'] = $this->User_model->get();
        $this->load_view('user/manager', $data);
    }


    public function mychildren()
    {

        $data['adherents'] = $this->User_model->get_last_transaction();
        $this->load_view('user/adherents',$data);
    }


    public function child()
    {
        if ($this->input->post()) {
            if (!$this->User_model->get_user_by_key($this->input->post('sponsor')))
            {
                $this->session->set_flashdata('danger', 'sponsor inconnu');
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
                'password' =>  password_hash($pass, PASSWORD_BCRYPT),
                'country_id' => $this->input->post('country'),
                'sexe' => $this->input->post('sexe'),
                'created_at' => date('Y-m-d : h:m:s'),
                'updated_at' => date('Y-m-d : h:m:s'),
            );
            $user = $this->User_model->register($data, $pass);
            $this->session->set_flashdata('success', 'Enregistré avec succes');
            redirect(base_url('users/mychildren'));

        }
        $data['plans'] = $this->plans->get_all();
        $this->load_view('user/child',$data);

    }

    public function profile()
    {
        $this->load_view('user/profile');

    }

    public function add_repos()
    {
        if (isset($_POST)) {
            $data = $_POST;
            $this->User_model->add_responsable($data);
            redirect('users/representants');
        } else {
            redirect('users/representants');
        }

    }

    public function representants()
    {
        $data['data'] = $this->User_model->representants();
        $data['users'] = $this->User_model->get();
        $this->load_view('user/representants', $data);

    }
}
