<?php

defined('BASEPATH') or exit('No direct script access allowed');
require 'AdminControler.php';

class WithDrawal extends AdminControler
{

    public function __construct()
    {
        parent::__construct();
        has_permission();
        $this->load->model('WithDrawal_model');
        $this->load->model('Event_model');
    }

    public function save()
    {

        if ($this->input->post()) {

            $this->Transfer_model->save($_POST);
        }
        redirect('transfer');
    }
    public function verify_balance($balance)
    {
        $result = get_user_meta(get_user_id(),$balance);
        echo $result;

    }
    public function add(){
        if ($this->input->post()) {
            $data = $_POST;
            $result = get_user_meta(get_user_id(),$data['account_type']);
            if($result > 0){
                $data['amount'] = $result;
                $data['user_id'] = get_user_id();
                $data['status'] = 0;
                $this->WithDrawal_model->insert($data);
            }
        }
        redirect('start/dashboard2');
    }

    public function all(){

      secure_route();
        $data['data'] = $this->WithDrawal_model->get_all();
        $this->load_view('retrait/list', $data);
    }

    public function approuve($id){
        $this->WithDrawal_model->approuve($id);


        redirect('WithDrawal/all');

    }

    public  function block($id){
        $this->WithDrawal_model->block($id);
        redirect('WithDrawal/all');
    }

    public function mywithdrawal(){
        $data['data'] = $this->WithDrawal_model->get_all_of_user();
        $this->load_view('retrait/mylist', $data);
    }
}
