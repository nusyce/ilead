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
        $this->load->model('User_roles_model');
        $this->load->model('payment_modes_model', 'mode');
        $this->load->model('Misc_model', 'misc');
        $this->load->model('Event_model');
        $this->load->model('Transactions_model');
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
            $ticket='';
    if (isset($_POST['use_ticket']) && $_POST['use_ticket'] == "on")
    {
        $this->db->where('tbl_free_tickets.user_id', get_user_id());
        $this->db->where('tbl_free_tickets.is_used', 0);
        $this->db->where('tbl_free_tickets.code', $_POST['ticket']);
        $tickets = $this->db->get('tbl_free_tickets')->row();

        if (!$tickets)
        {


            $this->session->set_flashdata('danger', 'ticket invalide');
            redirect(base_url('users/mychildren'));
        }else{
            $ticket=$tickets;
        }
    }

            $user = $this->User_model->register($data, $pass,$ticket);
            $this->session->set_flashdata('success', 'Enregistré avec succes');
            redirect(base_url('users/mychildren'));

        }
        $data['plans'] = $this->plans->get_all();
        $this->load_view('user/child',$data);

    }

    public function profile()
    {
        if ($this->input->post()) {
            $data = $_POST;
            $user = $this->User_model->update($data);
            $this->User_roles_model->get_all();
            $result =$this->User_model->get_user_by_id(get_user_id());
            if($result) {
                $admin_data = array(
                    'user_logged_in' => true,
                    'user_id' => $result->id,
                    'user_role_id' => $result->role_id,
                    'user_role' => $this->User_roles_model->get_role_by_id($result->role_id)->name,
                    'user_mail' => $result->email,
                    'user_name' => $result->firstname,
                    'last_name' => $result->lastname,
                    'cle' => $result->cle,
                    'djp' => $result->djp,
                    'country' => $result->country_id,
                    'user_plan_id' => $result->plan_id,
                    'user_plan' => $this->plans->get_plan_by_id($result->plan_id)->name,

                );

                $this->session->set_userdata($admin_data);
                $this->session->set_flashdata('success', $this->lang->line('edit_succes'));
            }
            redirect(base_url('users/profile'));

        }
        $data['data']= $this->User_model->get_user_by_id(get_user_id());
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

    public function details($id){
        $data['user'] = $this->User_model->get($id);
        $data['event'] = $this->Event_model->getAllMyEvenement($id);
        $data['transaction'] = $this->Transactions_model->getTransactionOfOneUser($id);
        $this->load_view('user/detail', $data);

    }



    public function change_plan($plan_id)
    {
        $data['plans'] = $this->plans->get_plan_above_this($plan_id);
        $data['has_pending_souscription'] = $this->transaction->has_pending_souscription();

        if($data['has_pending_souscription'])
        {

            redirect('users/paie_souscription');
        }
        $this->load_view('user/change_plan',$data);
    }
    public function paie_souscription()
    {


        $data['transation'] = $this->transaction->has_pending_souscription();
        $data['modes'] = $this->mode->get();
        $data['representates'] = $this->User_model->get_user_representate();
        $data['country'] = $this->misc->get_country(get_user_country());
        $this->load_view('user/paid',$data);

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
