<?php

use PHPMailer\PHPMailer\PHPMailer;
use Spipu\Html2Pdf\Exception\ExceptionFormatter;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Html2Pdf;

defined('BASEPATH') or exit('No direct script access allowed');
require 'AdminControler.php';

class Transactions extends AdminControler
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Transactions_model');

    }

    public function index()
    {

        $data['data'] = $this->Transactions_model->get();
        $this->load_view('transactions/manager', $data);
    }


    public function detail($id)
    {
        $data['data'] = $this->Transactions_model->get($id);
        $data['factures'] = $this->Transactions_model->invoices_transaction($data['data']->num_trans);
        $this->load_view('transactions/transaction', $data);
    }


    public function cancel($id)
    {
        $this->Transactions_model->cancel($id);
        redirect(base_url('transactions'));
    }
    public function create_inv($id)
    {
        $this->Transactions_model->create_invoice($id);
        redirect(base_url('transactions/detail/' . $id));
    }
    public function print_inv($id)
    {

        $data = $this->Transactions_model->invoices($id);
        extract($data, EXTR_REFS);
        try {
            ob_start();
            include APPPATH . '/helpers/invoice/res/ticket.php';
            $content = ob_get_clean();

            $html2pdf = new Html2Pdf('P', 'A4', 'fr', true, 'UTF-8', 0);
            $html2pdf->pdf->SetDisplayMode('fullpage');
            $html2pdf->writeHTML($content);
            $html2pdf->output('ticket.pdf');
        } catch (Html2PdfException $e) {
            $html2pdf->clean();

            $formatter = new ExceptionFormatter($e);
            echo $formatter->getHtmlMessage();
        }


    }
    public function send_facture($id)
    {
        $data = $this->Transactions_model->invoices($id);
        $this->load->model('transactions_model');
         $this->load->model('user_model');
         $tansaction=$this->transactions_model->get_transaction_by_numtran($data['num_trans']);
        $us = $this->user_model->get_user_by_id($tansaction->user_id);
        if($us->country_id == 156 || $us->country_id==226)
        {
             $lann = 'english';
            $this->lang->load($lann, $lann);
        }
         $this->db->where('id', $us->id);
        $datas['password'] =  password_hash($us->code, PASSWORD_BCRYPT);
        $this->db->update('tbl_users', $datas);
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = 'smtp.hostinger.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'mail@ileadglobe.com';
        $mail->Password = 'Taylor@123';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $baseFolder = $_SERVER['DOCUMENT_ROOT'];

        $paths = '/uploads/tmps/';
        $file_path = $baseFolder . $paths . 'ticket.pdf';
        try {
            extract($data, EXTR_REFS);
            try {
                ob_start();
                include APPPATH . '/helpers/invoice/res/ticket.php';
                $content = ob_get_clean();

                $html2pdf = new Html2Pdf('P', 'A4', 'fr', true, 'UTF-8', 0);
                $html2pdf->pdf->SetDisplayMode('fullpage');
                $html2pdf->writeHTML($content);
                $html2pdf->output($file_path, 'F');
            } catch (Html2PdfException $e) {
            }
            $mail->setFrom('mail@ileadglobe.com', 'iLead globe');
            $mail->addAddress($us->email, $us->firstname);
            //$mail->AddStringAttachment($attachment, 'Facture.pdf', 'base64', 'application/pdf');
            $mail->addAttachment($file_path, 'Facture_' . $tansaction->num_trans . '.pdf');
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $this->lang->line('confirm_pay');
            $mail->Body = $this->lang->line('your_pack_is_active').' <b>' . $us->code . '</b>, '.$this->lang->line('your_invoice_is_join');

            if (!$mail->send()) {
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                echo 'The email message was sent.';
            }
        } catch (Html2PdfException $e) {
        }
    }
  
      public function send_all_facture()
    {
        $this->load->model('transactions_model');
         $this->load->model('user_model');
           $tansactions = $this->transactions_model->get_paie_transaction();

        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = 'smtp.hostinger.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'mail@ileadglobe.com';
        $mail->Password = 'Taylor@123';
        $mail->SMTPSecure = 'tls';
       
        $mail->Port = 587;
         $mail->SMTPKeepAlive = true;
         $mail->SmtpConnect();
        $mail->setFrom('mail@ileadglobe.com', 'iLead globe');
        foreach($tansactions as $us)
        {
            $mail->ClearAllRecipients();

           
        
        if($us['country_id'] == 156 || $us['country_id']==226)
        {
             $sujet = 'Zoom Loging Code Name'; 
              $body = 'Please find below the code you will be using as your name to log in the following link:<br><a href="https://us02web.zoom.us/j/">https://us02web.zoom.us/j/</a><br>for the 3rd Edition of the JCM Entreprenarial Retreat.<br>Meeting ID : 884 0660 2326<br>Your Name:' .$us['name'][0].'_'.$us['code'].'_'.$us['firstname'].'<br>Thank you.<br><b>The iLEAD Management</b>';
        }else
        {
             $sujet = 'code Zoom de connexion';
             $body = 'Priere de trouver ci-dessous le code a utiliser pour vous connecter sur la plateform :<br><a href="https://us02web.zoom.us/j/">https://us02web.zoom.us/j/</a><br>pour la 3eme edition de la JCM Retreat Entreprenarial.<br>ID de reunion : 884 0660 2326<br>Nom:' .$us['name'][0].'_'.$us['code'].'_'.$us['firstname'].'<br>Merci.<br><b>The iLEAD Management</b>';
        }
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $sujet;
            $mail->Body = $body;
        if (filter_var($us['email'], FILTER_VALIDATE_EMAIL))
            {
                 $mail->addAddress($us['email'], $us['firstname']);
                if (!$mail->send()) {
                echo 'Invalid email address';
                break;
            }
        }
        }
        echo 'The email message was sent.';
    }

    public function test(){
        $id = '';
        if ($this->input->post() !== FALSE) {
            $id = $this->input->post('id');
            if (!empty($_FILES['attachment']['name'][0])) {
                if ($this->upload_files($_FILES['attachment'], $id) === FALSE) {
                    $data['error'] = $this->upload->display_errors('<div class="alert alert-danger">', '</div>');
                }
            }
            $this->Transactions_model->make_paie(18);
            redirect(base_url('transactions/detail/18'));

        } else {
            redirect(base_url('transactions/detail/18'));
        }
    }

    public function make_paiement()
    {
        $id = '';
        if ($this->input->post() !== FALSE) {
            $id = $this->input->post('id');
            if (!empty($_FILES['attachment']['name'][0])) {
                if ($this->upload_files($_FILES['attachment'], $id) === FALSE) {
                    $data['error'] = $this->upload->display_errors('<div class="alert alert-danger">', '</div>');
                }
            }
            $this->Transactions_model->make_paie($id);
           redirect(base_url('transactions/detail/' . $id));

        } else {
            redirect(base_url('transactions/detail/' . $id));
        }
    }


    private function upload_files($files, $id)
    {
        $paths = 'uploads/transactions/' . $id;
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
                $this->Transactions_model->add_attachments($id, $dd);

            } else {
                return false;
            }
        }

        return $images;
    }



}
