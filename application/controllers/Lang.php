<?php

class Lang extends CI_Controller
{

    public function index()
    {
        $language = $this->input->get('lang');

        //Choose language file according to selected lanaguage
        if ($language == "fr")
            $this->lang->load('french', 'lang');
        else
            $this->lang->load('english', 'lang');

        //Fetch the message from language file.
        $data['msg'] = $this->lang->line('msg');
        redirect(('start/dashboard'));
    }
}