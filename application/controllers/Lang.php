<?php

class Lang extends CI_Controller
{

    public function index()
    {
        $language = $this->input->get('lang');
        if ($language == 'fr') {
            $lann = 'french';
        } else {
            $lann = 'english';
        }

        $this->lang->load($language . '_lang', $lann);

        //Fetch the message from language file.
        $data['msg'] = $this->lang->line('msg');
        redirect(('start/dashboard'));
    }
}