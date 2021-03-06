<?php


defined('BASEPATH') or exit('No direct script access allowed');
require 'AdminControler.php';

class Config extends AdminControler
{

    public function __construct()
    {
        parent::__construct();
        has_permission();

    }


    public function index()
    {
        if(get_user_role_id()!=4){
            redirect('start/dashboard');
        }
        if (isset($_POST['percentage_adherent'])) {
            foreach ($_POST as $k => $setting) {
                update_option($k, $setting);
            }
            redirect('config');
        }
        has_permission();
        $this->load_view('setting/config');
    }

    public function test(){
        $data = $this->Event_model->getAllDepense(6);
        var_dump($data);
    }
}
