<?php

defined('BASEPATH') or exit('No direct script access allowed');
require 'AdminControler.php';

class Task extends AdminControler
{

    public function __construct()
    {
        parent::__construct();
        has_permission();
        $this->load->model('task_model');
    }


    public function index()
    {
        has_permission();
        $data['data'] = $this->task_model->get();
        $this->load_view('task/manager', $data);
    }
    public function modal($id='')
    {
        $data['title']= $this->lang->line('ajouter_une_tache');
        if($id!='')
        {
            $data['title']= $this->lang->line('modifier_la_tache');
            $data['task'] = $this->task_model->get($id);
        }


        $this->load_view('task/modal', $data,true);


    }
    public function delete($id)
    {

        $result= $this->task_model->delete($id);

        if ($result)
        {
            $this->session->set_flashdata('success', $this->lang->line('delete_succes'));
        }else{
            $this->session->set_flashdata('danger', $this->lang->line('delete_danger'));
        }
        redirect('task');
    }
    public function save($id='')
    {

        if ($this->input->post())
        {

            if ($id==''){


                $result = $this->task_model->insert($_POST);
                if ($result)
                {

                    $this->session->set_flashdata('success', $this->lang->line('add_succes'));
                }else{
                    $this->session->set_flashdata('danger', $this->lang->line('add_danger'));
                }
                redirect('task');
            }else{
                $result = $this->task_model->update($_POST);
                if ($result)
                {

                    $this->session->set_flashdata('success', $this->lang->line('edit_succes'));
                }else{
                    $this->session->set_flashdata('danger', $this->lang->line('edit_danger'));
                }
                redirect('task');
            }

        }


    }
}
