<?php

use PHPMailer\PHPMailer\PHPMailer;
use Spipu\Html2Pdf\Exception\ExceptionFormatter;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Html2Pdf;

defined('BASEPATH') or exit('No direct script access allowed');

class Transactions_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();

    }

    public function add($data)
    {
        $this->db->insert('tbl_transactions', $data);
        $insert = $this->db->insert_id();
        $this->numgeneratorcode($insert);
    }

    public function get($id = '')
    {
        if (get_user_role_id() == 1) {
            $this->db->where('user_id', get_user_id());
        } elseif (can_represente()) {
            $can = can_represente();
            $this->db->where('u.country_id', $can->country_id);
        }


        $this->db->select('tbl_transactions.user_id,tbl_transactions.id as id, due,c.name as cluster,by_user_id,u.sponsor as sponsor, u.code as code, num_trans, tbl_transactions.status as status, amount,u.lastname as lastname, u.firstname as firstname, pl.name as plan, p.nom as mde_pement,u.whatsapp_phone as phone,co.name as country');
        $this->db->join('tbl_users as u', 'u.id = tbl_transactions.user_id', 'left');
        $this->db->join('tbl_plans as pl', 'pl.id = tbl_transactions.plan_id', 'left');
        $this->db->join('tbl_cluster as c', 'c.id = u.cluster', 'left');
        $this->db->join('tbl_country as co', 'co.id = u.country_id', 'left');
        $this->db->join('tbl_payments_modes as p', 'p.id = tbl_transactions.mode_paiement', 'left');

        if (is_numeric($id)) {
            $this->db->where('tbl_transactions.id', $id);
            $transaction = $this->db->get('tbl_transactions')->row();
            //    var_dump($transaction);
            $transaction->attachements = $this->get_attachments($transaction->id);
            return $transaction;
        }
        return $this->db->get('tbl_transactions')->result_array();
    }
 public function get_paie_transaction()
    {
       
         $this->db->select('tbl_transactions.user_id, tbl_transactions.status as statust,u.lastname as lastname, u.firstname as firstname, pl.name as name,u.email as email,co.id as country_id,u.code as code');
         $this->db->where('status', 'paie');
        $this->db->join('tbl_users as u', 'u.id = tbl_transactions.user_id', 'left');
        $this->db->join('tbl_plans as pl', 'pl.id = tbl_transactions.plan_id', 'left');
   
        $this->db->join('tbl_country as co', 'co.id = u.country_id', 'left');
        
        return $this->db->get('tbl_transactions')->result_array();
    }

    public function invoices($id = '')
    {
        if (is_numeric($id)) {
            $this->db->where('tbl_factures.id', $id);
            return $this->db->get('tbl_factures')->result_array()[0];
        }
        return $this->db->get('tbl_factures')->result_array();
    }

    public function invoices_transaction($numtran)
    {
        $this->db->where('tbl_factures.num_trans', $numtran);
        return $this->db->get('tbl_factures')->result_array();
    }
public function get_transaction_by_numtran($numtran)
    {
       $this->db->where('num_trans', $numtran);
        return $this->db->get('tbl_transactions')->row();
    }


    public function create_invoice($id)
    {
        $data = [];
        $data_ar = $this->get($id);

        $data['user'] = $data_ar->firstname.' '.$data_ar->lastname;
        $data['plan'] = $data_ar->plan;
        $data['status'] = $data_ar->status;
        $data['due'] = $data_ar->due;
        $data['mode_paiement'] = $data_ar->mde_pement;
        $data['amount'] = $data_ar->amount;
        $data['sponsor'] = $data_ar->sponsor;
        $data['code_user'] = $data_ar->code;
        $data['by_user'] = get_user_name();
        $data['num_trans'] = $data_ar->num_trans;
        $this->db->insert('tbl_factures', $data);
        $insert = $this->db->insert_id();
        return $insert;
    }


    public function numgeneratorcode($id)
    {
        $code = 00000 + $id;
        $code = str_pad($id, 5, "0", STR_PAD_LEFT); // 0010
        $code = 'tr' . strval($code);
        $this->db->where('id', $id);
        $data = [];
        $data['num_trans'] = $code;
        $this->db->update('tbl_transactions', $data);
        return $code;
    }


    public function make_paie($id)
    {
        $this->db->where('id', $id);
        $data['status'] = 'paie';
        $this->db->update('tbl_transactions', $data);
        $this->db->where('id', $id);
        $transaction = $this->db->get('tbl_transactions')->row();
        if($transaction->type=="token")
        {
            $data=[];
            $data['event_id']=$transaction->event_id;
            $data['user_id']=$transaction->user_id;
            $data['created_at'] = date('Y-m-d H:i:s');
            $data['updated_at'] = date('Y-m-d H:i:s');
            $this->db->insert('tbl_book_event', $data);
        }else{
            $data=[];
            $CI =& get_instance();
            $CI->load->model('plans_model');
            $plan= $CI->plans_model->get_plan_by_id($transaction->plan_id);

            $this->db->where('id', $transaction->user_id);
            $user= $this->db->get('tbl_users')->row();
            if($user->expiration==null || $user->expiration=='')
            {

                $data['expiration']=date('Y-m-d H:i:s', strtotime("+".$plan->duree." months", strtotime(date('Y-m-d H:i:s'))));

            }
            else{
                $data['expiration']=date('Y-m-d H:i:s', strtotime("+".$plan->duree. "months", strtotime($user->expiration)));
            }
            $this->db->where('id', $transaction->user_id);
            $data['plan_id'] = $transaction->plan_id;
            $this->db->update('tbl_users',$data);
        }
        $invoice = $this->create_invoice($id);
        $this->send_invoice($invoice, $id);

    }


    private function send_invoice($invoice, $tansactions)
    {

        $tansaction = $this->get($tansactions);
        $data = $this->invoices($invoice);

        $this->load->model('user_model');
        $us = $this->user_model->get_user_by_id($tansaction->user_id);
        $CI =& get_instance();
        if($us->country_id == 156 || $us->country_id==226)
        {
            $sujet = 'Zoom Loging Code Name';
            $body = 'Please find below the code you will be using as your name to log in the following link: <br><a href="https://us02web.zoom.us/j/">https://us02web.zoom.us/j/</a><br>for the 3rd Edition of the JCM Entreprenarial Retreat.<br>Meeting ID : 884 0660 2326<br>Your Name:' .$data['plan'][0].'_'.$us->code.'_'.str_replace(' ', '_', $us->firstname).'<br>Thank you.<br><b>The iLEAD Management</b>';

             $lann = 'english';
            $CI->lang->load($lann, $lann);
        }
        else{
            $sujet = 'Code Zoom de connexion';
            $body = 'Prière de trouver ci-dessous le code a utiliser pour vous connecter sur la plateform: <br><a href="https://us02web.zoom.us/j/">https://us02web.zoom.us/j/</a><br>pour la 3eme edition de la JCM Retreat Entreprenarial.<br>ID de reunion : 884 0660 2326<br>Nom:' .$data['plan'][0].'_'.$us->code.'_'.str_replace(' ', '_', $us->firstname).'<br>Merci.<br><b>The iLEAD Management</b>';
            $lann = 'french';
            $CI->lang->load($lann, $lann);
        }
        $this->db->where('id', $tansaction->user_id);
        $datas['djp'] = 1;
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
        if (!file_exists($paths)) {
            mkdir($paths, 0777, true);
        }
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
                $html2pdf->clean();

                $formatter = new ExceptionFormatter($e);
                echo $formatter->getHtmlMessage();
            }


            //Recipients
            $mail->setFrom('mail@ileadglobe.com', 'iLead globe');
            $mail->addAddress($us->email, $us->firstname);
            //$mail->AddStringAttachment($attachment, 'Facture.pdf', 'base64', 'application/pdf');
            $mail->addAttachment($file_path, 'Facture_' . $tansaction->num_trans . '.pdf');

            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $this->lang->line('confirm_pay');
            $mail->Body = $this->lang->line('your_pack_is_active').'<b>' . $us->code . '</b>, ' .$this->lang->line('your_invoice_is_join');

            if (!$mail->send()) {
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                echo 'The email message was sent.';
            }
        } catch (Html2PdfException $e) {
            $html2pdf->clean();

            $formatter = new ExceptionFormatter($e);
            echo $formatter->getHtmlMessage();
        }
        $mail->ClearAllRecipients();
        try {


            //Recipients
            $mail->setFrom('mail@ileadglobe.com', 'iLead globe');
            $mail->addAddress($us->email, $us->firstname);


            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $sujet;
            $mail->Body = $body;

            $mail->send();


        } catch (Html2PdfException $e) {
            /* $html2pdf->clean();

             $formatter = new ExceptionFormatter($e);
             echo $formatter->getHtmlMessage();*/
        }


    }


    public function add_attachments($id, $datapod)
    {
        $data['file_type'] = $datapod['file_type'];
        $data['name'] = $datapod['raw_name'];
        $data['ref'] = 'transactions';
        $data['ref_id'] = $id;
        $data['patch'] = $datapod['file_name'];
        $this->db->insert('tbl_attachments', $data);
        return true;
    }

    public function get_attachments($id)
    {
        $this->db->where('ref_id', $id);
        $this->db->where('ref', 'transactions');
        return $this->db->get('tbl_attachments')->result_array();
    }
    

    public function has_pending_souscription(){
        $this->db->where('user_id', get_user_id());
        $this->db->where('status', "pending");
        $this->db->where('type', "souscription");
        $query = $this->db->get('tbl_transactions');

        return $query->num_rows() > 0 ? true : false;
    }
}
