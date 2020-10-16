<?php

defined('BASEPATH') or exit('No direct script access allowed');
require 'AdminControler.php';

class Users extends AdminControler
{

    function __construct()
    {

        parent::__construct();
        $this->load->model('User_model');

    }

    public function index()
    {
        has_permission();
        $data['data'] = $this->User_model->get();
        $this->load_view('user/manager', $data);
    }


    public function mychildren()
    {
        $this->load_view('user/adherents');
    }


    public function child()
    {
        $this->load_view('user/child');

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

    public function delete($id)
    {
        $this->session->set_flashdata('success', 'Suppression éffectué avec success');
        $this->User_model->delete($id);
        redirect('users');
    }
}
