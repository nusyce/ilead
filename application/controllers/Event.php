<?php
defined('BASEPATH') or exit('No direct script access allowed');
require 'AdminControler.php';


class Event extends AdminControler
{

    public function __construct()
    {
        parent::__construct();
        has_permission();
        $this->load->model('User_model', 'user');
        $this->load->model('Transactions_model');
        $this->load->model('Event_Model');
        $this->load->model('Plans_model', 'plans');
        $this->load->model('payment_modes_model', 'mode');
        $this->load->model('Misc_model', 'misc');
        $this->load->model('depense_model');
    }


    public function index()
    {
        $data['data'] = $this->Event_Model->get();
        $this->load_view('event/liste', $data);
    }

    public function get_file($id){
        $data['event'] = $this->Event_Model->get($id);
        $data['files'] = $this->Event_Model->get_attachments($id);
        $this->load_view('event/files', $data,true);
        }

    public function event($id)
    {
        $data['event'] = $this->Event_Model->get($id);

        if (!isset($_GET['navigation'])) {
            $data['navigation'] = '';
            $data['data'] = $this->Event_Model->get();
            $this->load_view('event/detail', $data);
        } else if ($_GET['navigation'] == 'transaction') {
            $data['navigation'] = $_GET['navigation'];
            $data['data'] = $this->Event_Model->getAllTransaction($id);
            $this->load_view('event/transaction', $data);
        } else if ($_GET['navigation'] == 'participants') {
            $data['navigation'] = $_GET['navigation'];
            $data['adherents'] = $this->Event_Model->participants($id);
            $this->load_view('event/participants', $data);
        } else if ($_GET['navigation'] == 'listfile') {


            if (!empty($_FILES['file']['name'][0])) {


                if ($this->upload_files($_FILES['file'], $id) === FALSE) {

                    $data['error'] = $this->upload->display_errors('<div class="alert alert-danger">', '</div>');
                }
            }
            $data['navigation'] = $_GET['navigation'];
            $ref = 'event';
            $data['files'] = $this->Event_Model->get_attachments($id);
            $this->load_view('event/list_file', $data);
        } else if ($_GET['navigation'] == 'depense') {
            $data['navigation'] = $_GET['navigation'];
            $ref = 'event';
            $data['data'] = $this->Event_Model->getAllDepense($id);

            $this->load_view('event/depense', $data);
        }

    }


    public function buy_token($id)
    {
        $data['title'] = "Payer le token de cet evenement";
        $data['event'] = $this->Event_Model->get($id);
        $this->load_view('event/buy_token_modal', $data, true);

    }

    public function paie_token($id)
    {

        $data['event'] = $this->Event_Model->get($id);
        $data['modes'] = $this->mode->get();
        $data['representates'] = $this->user->get_user_representate();
        $data['country'] = $this->misc->get_country(get_user_country());
        $this->load_view('event/paiement_token', $data);

    }

    function confirm_buy_token($id)
    {

        $user = $this->user->get_user_by_id(get_user_id());
        $transaction = array('user_id' => get_user_id(), 'plan_id' => $user->plan_id, 'due' => date('d-m-Y H:i:s'), 'created_at' => date('d-m-Y H:i:s'), 'status' => 'pending', 'amount' => get_option('token_price'), 'type' => 'token', 'event_id' => $id);
        $this->load->model('transactions_model');
        $id = $this->transactions_model->add($transaction);
        redirect('event/paie_token/' . $id);
        //  redirect('start/dashboard2');
    }

    public function save($id = '')
    {

        if ($this->input->post()) {
            if ($_POST['start_date'] > $_POST['end_date']) {
                $this->session->set_flashdata('danger', $this->lang->line('date_error'));
                redirect('event');
            }
            if ($id == '') {
                $result = $this->Event_Model->insert($_POST);
                if ($result) {
                    if (!empty($_FILES['attachment']['name'][0])) {
                        if ($this->upload_files($_FILES['attachment'], $result) === FALSE) {
                            $data['error'] = $this->upload->display_errors('<div class="alert alert-danger">', '</div>');
                        }
                    }
                    $this->session->set_flashdata('success', $this->lang->line('add_succes'));
                } else {
                    $this->session->set_flashdata('danger', $this->lang->line('add_danger'));
                }
                redirect('event');
            } else {
                $result = $this->Event_Model->update($_POST);
                if ($result) {
                    if (!empty($_FILES['attachment']['name'][0])) {
                        if ($this->upload_files($_FILES['attachment'], $id) === FALSE) {
                            $data['error'] = $this->upload->display_errors('<div class="alert alert-danger">', '</div>');
                        }
                    }
                    $this->session->set_flashdata('success', $this->lang->line('edit_succes'));
                } else {
                    $this->session->set_flashdata('danger', $this->lang->line('edit_danger'));
                }
                redirect('event');
            }

        }


    }
    function delete_event_file($file, $id)
    {
        $result=delete_file($file);
        if($result)
        {
            $this->session->set_flashdata('success', $this->lang->line('delete_succes'));
        }
        redirect('event/event/'.$id.'?navigation=listfile');
    }

    private function upload_files($files, $id)
    {
        $paths = 'uploads/events/' . $id;
        if (!file_exists($paths)) {
            mkdir($paths, 0777, true);
        }
        $config = array(
            'upload_path' => $paths,
            'allowed_types' => '*',
            'overwrite' => 1,
        );

        $this->load->library('upload', $config);

        $images = array();


            $_FILES['attachment[]']['name'] = $files['name'];
            $_FILES['attachment[]']['type'] = $files['type'];
            $_FILES['attachment[]']['tmp_name'] = $files['tmp_name'];
            $_FILES['attachment[]']['error'] = $files['error'];
            $_FILES['attachment[]']['size'] = $files['size'];
            $this->upload->initialize($config);
            if ($this->upload->do_upload('attachment[]')) {
                $dd = $this->upload->data();
                $this->Event_Model->add_attachments($id, $dd);

            } else {
                return false;
            }


        return $images;
    }

    public function modal($id = '')
    {
        $data['title'] = $this->lang->line('ajouter_un_evenement');
        if ($id != '') {
            $data['title'] = $this->lang->line('modifier_un_evenement');
            $data['event'] = $this->Event_Model->get($id);
        }


        $this->load_view('event/modal', $data, true);


    }

    public function delete_event($id)
    {

        $result = $this->Event_Model->delete($id);

        if ($result) {
            $this->session->set_flashdata('success', $this->lang->line('delete_succes'));
        } else {
            $this->session->set_flashdata('danger', $this->lang->line('delete_danger'));
        }
        redirect('event/index');
    }

    public function delete_depense($id, $id_event)
    {

        $result = $this->Event_Model->delete_depense($id);

        if ($result) {
            $this->session->set_flashdata('success', $this->lang->line('delete_succes'));
        } else {
            $this->session->set_flashdata('danger', $this->lang->line('delete_danger'));
        }
        redirect('event/event/' . $id_event . '?navigation=depense');
    }

    public function depense($id)
    {

        $result = $this->Event_Model->insert_depense($_POST);

        if ($result) {
            $this->session->set_flashdata('success', $this->lang->line('add_succes'));
        } else {
            $this->session->set_flashdata('danger', $this->lang->line('add_danger'));
        }
        redirect('event/event/' . $id . '?navigation=depense');
    }

    public function getParticipate($id)
    {
        $data['data'] = $this->Event_Mode->getAllParticipate($id);
        $this->load_view('event/transaction/' . $id, $data);
    }


}
