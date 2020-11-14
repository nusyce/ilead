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
        $this->load->model('Representates_model');
        $this->load->model('Transactions_model', 'transaction');
    }

    public function index()
    {
        has_permission();
        $data['data'] = $this->User_model->get();
        $this->load_view('user/manager', $data);
    }


    public function mychildren()
    {

        $data['adherents'] = $this->User_model->myadherents();
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
        if ($this->input->post()) {
            $data = array(
                'firstname' => $this->input->post('firstname'),
                'lastname' => $this->input->post('lastname'),
            );
            $user = $this->User_model->update($data);
            redirect(base_url('users/profile'));

        }
        $data['data']= $this->User_model->get(get_user_id());
        $this->load_view('user/profile', $data);

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
   public function change_role($id)
    {
        
        if ($this->input->post()) {
            $data['role_id'] = $_POST['role'];
            $data['id'] = $_POST['id'];
            $this->User_model->change_role($data);
            $this->session->set_flashdata('succes', "Le role a été mis à jour avec succes");
              redirect(base_url('start/dashboard'));
        } else {
            
            $data['user'] = $this->User_model->get_user_by_id($id);
            $this->load_view('user/change_role', $data);
        }

    }
    public function representants()
    {
        $data['data'] = $this->User_model->representants();
        $data['users'] = $this->User_model->get();
        $this->load_view('user/representants', $data);

    }
     public function delete_representate($id,$user_id)
    {
        $this->Representates_model->delete($id,$user_id);
        redirect('users/representants');

    }

    public function change_plan($plan_id)
    {
        $data['plans'] = $this->plans->get_plan_above_this($plan_id);
        $data['has_pending_souscription'] = $this->transaction->has_pending_souscription();
        $this->load_view('user/change_plan',$data);
    }

    public function update_plan($user_id, $plan_id)
    {
        $transactionData = array(
            'user_id' => $user_id, 
            'plan_id' => $plan_id, 
            'due' => date('d-m-Y H:i:s'), 
            'created_at' => date('d-m-Y H:i:s'), 
            'status' => 'pending', 
            'type' => 'souscription', 
            'amount' => get_plan_upgrade_price($plan_id)
        );

        $this->transaction->add($transactionData);
        $this->session->set_flashdata('success', $this->lang->line('success_package_change_message'));
        
        redirect('users/change_plan/'.get_user_plan_id());
    }
}
