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
        $this->session->set_userdata(['lang' => $lann]);
        redirect(('start/dashboard'));
    }
}