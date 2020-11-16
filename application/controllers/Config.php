<?php


defined('BASEPATH') or exit('No direct script access allowed');
require 'AdminControler.php';

class Config extends AdminControler
{

    public function __construct()
    {
        parent::__construct();
        has_permission();
        $this->load->model('plans_model');
    }


    public function index()
    {
        if (isset($_POST['percentage_adherent'])) {
            foreach ($_POST as $k => $setting) {
                update_option($k, $setting);
            }
            redirect('config');
        }
        has_permission();
        $this->load_view('setting/config');
    }
}
