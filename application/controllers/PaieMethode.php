<?php

defined('BASEPATH') or exit('No direct script access allowed');
require 'AdminControler.php';

class PaieMethode extends AdminControler
{

    function __construct()
    {
        parent::__construct();
        has_permission();
        $this->load->model('Payment_modes_model', 'payment_modes_model');

    }

    public function index()
    {
        if(get_user_role_id()!=4){
            redirect('start/dashboard');
        }
        $data['data'] = $this->payment_modes_model->get();
        $this->load_view('paie_method/manager', $data);
    }
}
