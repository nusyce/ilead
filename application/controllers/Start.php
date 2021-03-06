<?php
defined('BASEPATH') or exit('No direct script access allowed');
require 'AdminControler.php';

class Start extends CI_Controller
{
    function __construct()
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
        $this->load->model('Plans_model', 'plans');
        $this->load->model('User_model', 'user');
        $this->load->model('payment_modes_model', 'mode');
        $this->load->model('Event_model');


    }

    public function index()
    {
        $data['plans'] = $this->plans->get_all();
        $this->load->view('home/home', $data);
    }


    public function dashboard()
    {

        if(get_user_djp()==0)
        {
          redirect(base_url('paid'));
        }
        else{

            $data = [];
            $data['abonne'] = $this->user->restToTicket();
            $data['myevent'] = $this->Event_model->getMyEvenement(get_user_id());
            $data['othe_event'] = $this->Event_model->getOtherEvenement(get_user_id());
            $this->load->view('admin/includes/header', $data);
            $this->load->view('admin/includes/asides', $data);
            if(get_user_role_id()==4){
                $this->load->view('admin/dashboard/dashboard',$data);
            }
            else{

                $this->load->view('admin/dashboard/dashbord_user',$data);
            }

            $this->load->view('admin/includes/footer', $data);
        }

    }

}
