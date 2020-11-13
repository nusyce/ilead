<?php
defined('BASEPATH') or exit('No direct script access allowed');
require 'AdminControler.php';


class Event extends AdminControler
{

    public function __construct()
    {
        parent::__construct();
        has_permission();
        $this->load->model('Event_Model');
    }


    public function index()
    {
            $data['data'] = $this->Event_Model->get();
            $this->load_view('event/liste', $data);
    }

    public function event($id)
    {

        if (!isset($_GET['navigation'])){
            $data['data'] = $this->Event_Model->get();
            $this->load_view('event/detail', $data);
        }

        else if ($_GET['navigation']=='transaction'){
            $data['data'] = $this->Event_Model->getAllTransaction($id);
            $this->load_view('event/transaction', $data);
        }
        else if ($_GET['navigation']=='participants'){
            $data['data'] = $this->Event_Model->getAllTransaction($id);
            $this->load_view('event/participants', $data);
        }
        else if ($_GET['navigation']=='listfile'){
            $ref = 'event';
            $data['data'] = $this->Event_Model->get_attachments($id, $ref);
            $this->load_view('event/list_file', $data);
        }
        else if ($_GET['navigation']=='depense'){
            $ref = 'event';
            $data['data'] = $this->Event_Model->getAllDepense($id);
            $this->load_view('event/list_file', $data);
        }

    }
    public function save($id='')
    {

        if ($this->input->post())
            {
                if ($id==''){


                $result = $this->Event_Model->insert($_POST);
                if ($result)
                {
                    if (!empty($_FILES['attachment']['name'][0])) {
                        if ($this->upload_files($_FILES['attachment'], $result) === FALSE) {
                            $data['error'] = $this->upload->display_errors('<div class="alert alert-danger">', '</div>');
                        }
                    }
                    $this->session->set_flashdata('success', $this->lang->line('add_succes'));
                }else{
                    $this->session->set_flashdata('danger', $this->lang->line('add_danger'));
                }
                redirect('event');
            }else{
                    $result = $this->Event_Model->update($_POST);
                    if ($result)
                    {
                        if (!empty($_FILES['attachment']['name'][0])) {
                            if ($this->upload_files($_FILES['attachment'], $id) === FALSE) {
                                $data['error'] = $this->upload->display_errors('<div class="alert alert-danger">', '</div>');
                            }
                        }
                        $this->session->set_flashdata('success', $this->lang->line('edit_succes'));
                    }else{
                        $this->session->set_flashdata('danger', $this->lang->line('edit_danger'));
                    }
                    redirect('event');
                }

        }


    }
    public function modal($id='')
    {
        $data['title']= $this->lang->line('ajouter_un_evenement');
        if($id!='')
        {
            $data['title']= $this->lang->line('modifier_un_evenement');
            $data['event'] = $this->Event_Model->get($id);
        }


        $this->load_view('event/modal', $data,true);


    }

    public function delete_event($id)
    {

        $result= $this->Event_Model->delete($id);

        if ($result)
        {
            $this->session->set_flashdata('success', $this->lang->line('delete_succes'));
        }else{
            $this->session->set_flashdata('danger', $this->lang->line('delete_danger'));
        }
        redirect('event/index');
    }


    public function getParticipate($id){
        $data['data'] = $this->Event_Mode->getAllParticipate($id);
        $this->load_view('event/transaction/'.$id, $data);
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

        foreach ($files['name'] as $key => $image) {
            $_FILES['attachment[]']['name'] = $files['name'][$key];
            $_FILES['attachment[]']['type'] = $files['type'][$key];
            $_FILES['attachment[]']['tmp_name'] = $files['tmp_name'][$key];
            $_FILES['attachment[]']['error'] = $files['error'][$key];
            $_FILES['attachment[]']['size'] = $files['size'][$key];
            $this->upload->initialize($config);
            if ($this->upload->do_upload('attachment[]')) {
                $dd = $this->upload->data();
                $this->Event_Model->add_attachments($id, $dd);

            } else {
                return false;
            }
        }

        return $images;
    }





}
