<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminControler extends CI_Controller {


	public function load_view($view)
	{
		$this->load->view('admin/includes/header');
		$this->load->view('admin/includes/asides');
		$this->load->view('admin/'.$view);
		$this->load->view('admin/includes/footer');
	}
}
