<?php
use PHPMailer\PHPMailer\PHPMailer;
defined('BASEPATH') or exit('No direct script access allowed');

class WithDrawal_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();

    }


    public function get_all()
    {
        return $this->db->get('tbl_withdrawal')->result_array();
    }

    public function get_all_of_user()
    {
        $this->db->where('user_id',get_user_id());
        return $this->db->get('tbl_withdrawal')->result_array();
    }

    public function insert($data){
        $this->db->insert('tbl_withdrawal',$data);
        sendMailToAdmin();
    }

    public  function approuve($id){
        $data = array();
        $this->db->where('id',$id);
        $retrait = $this->db->get('tbl_withdrawal')->row();
        $retrait->status = 1;
        $data['status'] = 1;
        $this->db->where('id',$id);
        $this->db->update('tbl_withdrawal', $data);
        $this->approuveMail($retrait->user_id);
    }

    public  function block($id){
        $data = array();
        $this->db->where('id',$id);
        $retrait = $this->db->get('tbl_withdrawal')->row();
        $retrait->status = 2;
        $data['status'] = 2;
        $this->db->where('id',$id);
        $this->db->update('tbl_withdrawal', $data);
        $this->blockMail($retrait->user_id);
    }

    public function blockMail($id){
        $this->db->where('id',$id);
        $user =  $this->db->get('tbl_users')->row();
        $CI =& get_instance();
        if ($user->country_id == 156 || $user->country_id == 226) {
            $sujet = 'Withdraw rejected';
            $body = 'Hello Mr/M '.$user->firstme.'<br>Your withdraw request has been block<br><b>The iLEAD Management</b>';

            $lann = 'english';
            $CI->lang->load($lann, $lann);
        } else {
            $sujet = 'Rejet de retrait';
            $body = 'Bonjour Mr/M '.$user->firstname.'<br>Votre demande de retrait a été bloquée<br><b>The iLEAD Management</b>';
            $lann = 'french';
            $CI->lang->load($lann, $lann);
        }
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.hostinger.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'mail@ileadglobe.com';
        $mail->Password = 'Taylor@123';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->setFrom('mail@ileadglobe.com', 'iLead globe');
        $mail->addAddress('douanlacompanie@gmail.com', $user->firstname);
        $mail->isHTML(true);
        $mail->Subject = $sujet;
        $mail->Body =$body;
        try {
            $mail->Send();
            echo 'The email message was sent.';
        } catch (phpmailerException $e) {
            echo $e->errorMessage(); //Pretty error messages from PHPMailer
        } catch (Exception $e) {
            echo $e->getMessage(); //Boring error messages from anything else!
        }
    }

    public function approuveMail($id){
        $this->db->where('id',$id);
        $user =  $this->db->get('tbl_users')->row();
        $CI =& get_instance();
            if ($user->country_id == 156 || $user->country_id == 226) {
                $sujet = 'Withdraw validation';
                $body = 'Hello Mr/M '.$user->firstme.'<br>Your withdraw request has been granted<br><b>The iLEAD Management</b>';

                $lann = 'english';
                $CI->lang->load($lann, $lann);
            } else {
                $sujet = 'Validation de retrait';
                $body = 'Bonjour Mr/M '.$user->firstname.'<br>Votre demande de retrait a été approuvée<br><b>The iLEAD Management</b>';
                $lann = 'french';
                $CI->lang->load($lann, $lann);
            }
            $mail = new PHPMailer();
            $mail->isSMTP();
            $mail->Host = 'smtp.hostinger.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'mail@ileadglobe.com';
            $mail->Password = 'Taylor@123';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;
            $mail->setFrom('mail@ileadglobe.com', 'iLead globe');
            $mail->addAddress('douanlacompanie@gmail.com', $user->firstname);
            $mail->isHTML(true);
            $mail->Subject = $sujet;
            $mail->Body =$body;
            try {
                $mail->Send();
                echo 'The email message was sent.';
            } catch (phpmailerException $e) {
                echo $e->errorMessage(); //Pretty error messages from PHPMailer
            } catch (Exception $e) {
                echo $e->getMessage(); //Boring error messages from anything else!
            }
    }

    public function sendMailToAdmin(){
        $this->db->where('role_id',4);
        $admins =  $this->db->get('tbl_users')->result_array();
        $CI =& get_instance();
        foreach ($admins as $admin){
            if ($admin->country_id == 156 || $admin->country_id == 226) {
                $sujet = 'New request withdrawal';
                $body = 'Hello Mr/M '.$admin->firstme.'<br>A new withdrawal request has been issued. Please connect and validate it<br><b>The iLEAD Management</b>';

                $lann = 'english';
                $CI->lang->load($lann, $lann);
            } else {
                $sujet = 'Nouvelle requête de retrait';
                $body = 'Bonjour Mr/M '.$admin->firstname.'<br>Une nouvelle requête de retrait à été émise. Merci de vous  connectez et de la validez..<br><b>The iLEAD Management</b>';
                $lann = 'french';
                $CI->lang->load($lann, $lann);
            }
            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host = 'smtp.hostinger.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'mail@ileadglobe.com';
            $mail->Password = 'Taylor@123';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;
            $mail->setFrom('mail@ileadglobe.com', 'iLead globe');
            $mail->addAddress($admin->email, $admin->firstname);
            $mail->isHTML(true);
            $mail->Subject = $sujet;
            $mail->Body =$body;
            try {

                $mail->Send();
                echo 'The email message was sent.';
            } catch (phpmailerException $e) {
                echo $e->errorMessage(); //Pretty error messages from PHPMailer
            } catch (Exception $e) {
                echo $e->getMessage(); //Boring error messages from anything else!
            }

        }

    }

}
