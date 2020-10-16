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
    }

    public function get($id = '')
    {
        if (get_user_role_id() == 1) {
            $this->db->where('user_id', get_user_id());
        } elseif (can_represente()) {
            $can = can_represente();
            $this->db->where('u.country_id', $can->country_id);
        }


        $this->db->select('tbl_transactions.id as id, due,c.name as cluster,by_user_id,u.sponsor as sponsor, u.code as code, num_trans, tbl_transactions.status as status, amount,u.lastname as lastname, u.firstname as firstname, pl.name as plan, p.nom as mde_pement');
        $this->db->join('tbl_users as u', 'u.id = tbl_transactions.user_id', 'left');
        $this->db->join('tbl_plans as pl', 'pl.id = tbl_transactions.plan_id', 'left');
        $this->db->join('tbl_cluster as c', 'c.id = u.cluster', 'left');
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


    public function invoices($id = '')
    {
        if (is_numeric($id)) {
            $this->db->where('tbl_factures.id', $id);
            return $this->db->get('tbl_factures')->result_array()[0];
        }
        return $this->db->get('tbl_factures')->result_array();
    }


    public function create_invoice($id)
    {
        $data = [];
        $data_ar = $this->get($id);

        $data['user'] = $data_ar->firstname;
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
        $invoice = $this->create_invoice($id);
        $this->send_invoice($invoice, $id);
    }


    private function send_invoice($invoice, $tansactions)
    {

        $tansaction = $this->transactions_model->get($tansactions);
        $data = $this->transactions_model->invoices($invoice);
        $this->load->model('user_model');
        $user = $this->user_model->get_user_by_id($tansaction->user_id);
        // Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            extract($data, EXTR_REFS);
            try {
                ob_start();
                include APPPATH . '/helpers/invoice/res/ticket.php';
                $content = ob_get_clean();

                $html2pdf = new Html2Pdf('P', 'A4', 'fr', true, 'UTF-8', 0);
                $html2pdf->pdf->SetDisplayMode('fullpage');
                $html2pdf->writeHTML($content);
                $attachment = $html2pdf->output('ticket.pdf', 'E');
            } catch (Html2PdfException $e) {
                $html2pdf->clean();

                $formatter = new ExceptionFormatter($e);
                echo $formatter->getHtmlMessage();
            }


            //Recipients
            $mail->setFrom('contact@ileadglobe.com', 'iLead');
            $mail->addAddress($user->email, $user->firstname);
            $mail->AddStringAttachment($attachment, 'Facture.pdf', 'base64', 'application/pdf');

            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'CONFIRMATION DE PAIEMENT';
            $mail->Body = 'Votre pack est maintenant activé avec succes votre code est le suivant <b>' . $user->code . '</b>, votre facture est join à ce mail';

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
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
}
