<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

defined('BASEPATH') or exit('No direct script access allowed');


class User_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Misc_model');

    }


    public function get($id = '', $where = [])
    {
        $this->db->select('tbl_users.id as id, firstname,lastname,country_id,profession,whatsapp_phone,c.name as cluster,sponsor,r.name as role,sexe,cle,co.name as country');
        $this->db->join('tbl_roles as r', 'r.id = tbl_users.role_id', 'left');
        $this->db->join('tbl_cluster as c', 'c.id = tbl_users.cluster', 'left');
        $this->db->join('tbl_country as co', 'co.id = tbl_users.country_id', 'left');
        if (is_numeric($id)) {
            $this->db->where('tbl_users.id', $id);
            $user = $this->db->get('tbl_users')->row();
            $user->country = $this->Misc_model->get_country($user->country_id);
            return $user;
        }
        return $this->db->get('tbl_users')->result_array();
    }

    public function get_last_transaction()
    {

        $this->db->select('pl.name as plan, pl.id as plan_id,pl.price as price,pl.price_euro as price_euro,pl.price_dollard as price_dollard');
        $this->db->join('tbl_plans as pl', 'pl.id = tbl_transactions.plan_id', 'inner');
        $this->db->where('user_id', get_user_id());
        return $this->db->order_by('tbl_transactions.id', "desc")->limit(1)->get('tbl_transactions')->row();
    }

    public function update($data)
    {
        $this->db->where('id', get_user_id());
        return $this->db->update('tbl_users', $data);
    }

    public function get_all_paid()
    {
        $this->db->select('tbl_transactions.user_id,tbl_transactions.id as id, due,c.name as cluster,by_user_id,u.sponsor as sponsor, u.code as code, u.cle as cle, num_trans, tbl_transactions.status as status, amount,u.lastname as lastname, u.firstname as firstname, pl.name as plan, p.nom as mde_pement,u.whatsapp_phone as phone,co.name as country');
        $this->db->join('tbl_users as u', 'u.id = tbl_transactions.user_id', 'left');
        $this->db->join('tbl_plans as pl', 'pl.id = tbl_transactions.plan_id', 'left');
        $this->db->join('tbl_cluster as c', 'c.id = u.cluster', 'left');
        $this->db->join('tbl_country as co', 'co.id = u.country_id', 'left');
        $this->db->join('tbl_payments_modes as p', 'p.id = tbl_transactions.mode_paiement', 'left');
        $this->db->where('tbl_transactions.status', 'paie');
        return $this->db->get('tbl_transactions')->result_array();
    }


    public function get_user_representate($country = '')
    {
        $this->db->select('us.firstname, us.whatsapp_phone,us.email');
        $this->db->join('tbl_users as us', 'us.id = tbl_representates.user_id', 'inner');
        if (is_numeric($country)) {
            $this->db->where('tbl_representates.country_id', $country);
        } else {
            $this->db->where('tbl_representates.country_id', get_user_country());
        }

        return $this->db->order_by('tbl_representates.id', "desc")->get('tbl_representates')->result_array();
    }

    public function representants($id = '')
    {
        $this->db->select('tbl_representates.id as id, firstname,lastname,cl.name as cluster,c.name as country,profession,whatsapp_phone,sponsor,tbl_representates.user_id as user_id');
        $this->db->join('tbl_users as u', 'u.id = tbl_representates.user_id', 'inner');
        $this->db->join('tbl_country as c', 'c.id = tbl_representates.country_id', 'inner');
        $this->db->join('tbl_cluster as cl', 'cl.id = u.cluster', 'inner');
        if (is_numeric($id)) {
            $this->db->where('id', $id);
            $user = $this->db->get('tbl_representates')->row();
            $user->country = $this->Misc_model->get_country($user->country_id);
        }
        return $this->db->get('tbl_representates')->result_array();
    }

    public function myadherents()
    {
        $this->db->select('tbl_users.id,firstname,lastname,email,whatsapp_phone,sexe,cu.name as cluster,co.name as country,tbl_users.djp');
        $this->db->join('tbl_cluster as cu', 'cu.id = tbl_users.cluster', 'inner');
        $this->db->join('tbl_country as co', 'co.id = tbl_users.country_id', 'inner');
        $this->db->where('sponsor', get_user_cle());
        return $this->db->get('tbl_users')->result_array();
    }

    //modification de la fonction myadherents() pour utilisation
    public function myadherentsModify($code)
    {
        $this->db->select('tbl_users.id,firstname,lastname,email,whatsapp_phone,sexe,cu.name as cluster,co.name as country');
        $this->db->join('tbl_cluster as cu', 'cu.id = tbl_users.cluster', 'inner');
        $this->db->join('tbl_country as co', 'co.id = tbl_users.country_id', 'inner');
        $this->db->where('sponsor', $code);
        return $this->db->get('tbl_users')->result_array();
    }

    //initialise le portefeuille de tous les utilisateurs
    public function getCommissionOfAllUser(){
        $users = $this->get();
        foreach ($users as $user){
            $adherents = myadherentsModify($user['sponsor']);
            $somme = 0;
            foreach ($adherents  as $adherent){
                $this->db->select('tbl_transactions');
                $this->db->where('user_id',$adherent['id']);
                $fetch = $this->db->get('tbl_transactions')->row();
                $somme =+ (($fetch['amount']*20)/100);
            }
            $this->db->insert('tbl_meta_data', array("user_id"=>$user['id'],"key"=>"portefeuille","value"=>$somme));
        }
    }

    public function login($data)
    {

        $this->db->from('tbl_users');
        $this->db->where('cle', $data['cle']);

        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return false;
        } else {
            $result = $query->row_array();
            $validPassword = password_verify($data['password'], $result['password']);
            if ($validPassword) {
                return $result = $query->row_array();
            }
        }
    }

    public function change_role($data)
    {
        $this->db->where('id', $data['id']);
        $us = $this->db->update('tbl_users', $data);
    }

    public function add_responsable($data)
    {

        $this->db->where('country_id', $data['country_id']);
        $this->db->where('user_id', $data['user_id']);
        $rest = $this->db->get('tbl_representates')->row();
        if (!$rest) {
            $data['due'] = date('Y-m-d H:s');
            $this->db->insert('tbl_representates', $data);
            $insert = $this->db->insert_id();

            $this->db->where('id', $data['user_id']);
            $us = $this->db->get('tbl_users')->row();
            if ($us->role_id == 1) {
                $info = [
                    'role_id' => 3,
                ];
                $this->db->where('id', $data['user_id']);
                $us = $this->db->update('tbl_users', $info);
            }
        }
    }

    public function register($data, $pass)
    {

        $this->db->insert('tbl_users', $data);
        $insert = $this->db->insert_id();
        $iso = get_country($data['country_id'])->iso;
        $generate = $this->codeGeneratorKey($insert, $iso);
        $this->welcome_email($generate['cle'], $generate['code'], $data);
        $this->db->where('id', $_POST['plan']);
        $plan = $this->db->get('tbl_plans')->row();
        $CI =& get_instance();
        $CI->load->model('plans_model');
        $plan = $CI->plans_model->get_plan_by_id($_POST['plan']);

        $transaction = array('user_id' => $insert, 'plan_id' => $plan->id, 'due' => date('d-m-Y H:i:s'), 'created_at' => date('d-m-Y H:i:s'), 'status' => 'pending', 'amount' => $plan->price,'type' => 'souscription');
        $CI->load->model('transactions_model');
        $CI->transactions_model->add($transaction);

    }

    public function get_user_by_email($email)
    {
        $this->db->where('email', $email);
        return $this->db->get('tbl_users')->row();
    }

    public function get_user_by_key($cle)
    {
        $this->db->where('cle', $cle);
        $user = $this->db->get('tbl_users')->row();
        if ($user) {
            return json_encode($user);
        }
    }

    public function get_user_by_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('tbl_users')->row();
    }

    public function get_representate_by_user($id)
    {
        $this->db->where('user_id', $id);
        return $this->db->get('tbl_representates')->result_array();
    }

    public function logout()
    {

    }


    public function codeGeneratorKey($user_id, $iso)
    {
        $key = 0000 + $user_id;
        $key = str_pad($user_id, 5, "0", STR_PAD_LEFT); // 0010
        $code = $iso . strval($key) . rand(10, 99);
        $this->db->where('id', $user_id);
        $data = [];
        $data['code'] = $code;
        $data['cle'] = $key;
        $data['password'] = password_hash($code, PASSWORD_BCRYPT);
        $this->db->update('tbl_users', $data);
        return $data;


    }

    private function welcome_email($key, $code, $data)
    {
        // Instantiation and passing `true` enables exceptions
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


        try {
            //Recipients
            $mail->setFrom('mail@ileadglobe.com', 'iLead globe');
            $mail->addAddress($data['email'], $data['firstname']);     // Add a recipient


            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $this->lang->line('welcome_message');
            $mail->Body = $this->lang->line('dear_message') . ' <b>' . $data['firstname'] . '</b><br>' . $this->lang->line('your_code_is') . substr($code, 0, -2) . 'XX' . '<br>' . $this->lang->line('your_key_is') . $key . '<br>';

            if (!$mail->send()) {
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                echo 'The email message was sent.';
            }
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

        }
        $mail->ClearAllRecipients();
        $representates = $this->get_user_representate($data['country_id']);
        foreach ($representates as $representate) {
            $mail->ClearAllRecipients();
            $mail->isHTML(true);
            $mail->Subject = $this->lang->line('new_registration_message');
            $mail->Body = $this->lang->line('dear_message') . ' <b>' . $representate['firstname'] . '</b><br>' . $this->lang->line('new_member_registration_message') . '<br>' . $this->lang->line('register_name_message') . ' : ' . $data['firstname'] . ' ' . $data['lastname'] . '<br>' . $this->lang->line('register_mail_message') . ' : ' . $data['email'] . '<br>' . $this->lang->line('register_whatapp_phone_message') . ' : ' . $data['whatsapp_phone'];
            if (filter_var($representate['email'], FILTER_VALIDATE_EMAIL)) {
                $mail->addAddress($representate['email'], $representate['firstname']);
                if (!$mail->send()) {
                    echo 'Invalid email address';
                    break;
                }
            }
        }
    }


    public function get_user_membership(){

    }


    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tbl_users');
    }
}
