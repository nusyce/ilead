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
        $this->db->select('tbl_users.id as id, firstname,lastname,country_id,profession,whatsapp_phone,c.name as cluster,sponsor,r.name as role,sexe');
        $this->db->join('tbl_roles as r', 'r.id = tbl_users.role_id', 'left');
        $this->db->join('tbl_cluster as c', 'c.id = tbl_users.cluster', 'left');
        if (is_numeric($id)) {
            $this->db->where('id', $id);
            $user = $this->db->get('tbl_users')->row();
            $user->country = $this->Misc_model->get_country($user->country_id);
        }
        return $this->db->get('tbl_users')->result_array();
    }

    public function get_last_transaction()
    {
        $this->db->select('pl.name as plan, pl.id as plan_id,pl.price as price');
        $this->db->join('tbl_plans as pl', 'pl.id = tbl_transactions.plan_id', 'inner');
        $this->db->where('user_id', get_user_id());
        return $this->db->order_by('tbl_transactions.id',"desc")->limit(1)->get('tbl_transactions')->row();
    }
    public function get_user_representate()
    {
        $this->db->select('us.firstname, us.whatsapp_phone,us.email');
        $this->db->join('tbl_users as us', 'us.id = tbl_representates.user_id', 'inner');
        $this->db->where('tbl_representates.country_id', get_user_country());
        return $this->db->order_by('tbl_representates.id',"desc")->get('tbl_representates')->result_array();
    }
    public function representants($id = '')
    {
        $this->db->select('tbl_representates.id as id, firstname,lastname,cl.name as cluster,c.name as country,profession,whatsapp_phone,sponsor');
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
    $this->db->select('tbl_users.id,firstname,lastname,email,whatsapp_phone,sexe,cu.name as cluster,co.name as country');
    $this->db->join('tbl_cluster as cu', 'cu.id = tbl_users.cluster', 'inner');
    $this->db->join('tbl_country as co', 'co.id = tbl_users.country_id', 'inner');
    $this->db->where('sponsor', get_user_cle());
    return $this->db->get('tbl_users')->result_array();
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


    public function add_responsable($data)
    {

        $this->db->where('country_id', $data['country_id']);
        $this->db->where('user_id', $data['user_id']);
        $rest = $this->db->get('tbl_representates')->row();
        if (!$rest) {
            $data['due'] = date('Y-m-d H:s');
            $this->db->insert('tbl_representates', $data);
            $insert = $this->db->insert_id();
        }
    }

    public function register($data, $pass)
    {

        $this->db->insert('tbl_users', $data);
        $insert = $this->db->insert_id();
        $iso=get_country($data['country_id'])->iso;
        $cle= $this->codeGeneratorKey($insert,$iso);
        $this->welcome_email($data,$cle,$pass);
        /*$this->db->where('id', $_POST['plan']);
        $plan= $this->db->get('tbl_plans')->row();*/
        $CI =& get_instance();
        $CI->load->model('plans_model');
        $plan=$CI->plans_model->get_plan_by_id($_POST['plan']);

        $transaction=array('user_id'=>$insert,'plan_id'=>$plan->id,'due'=>date('d-m-Y H:i:s'),'created_at'=>date('d-m-Y H:i:s'),'status'=>'pending','amount'=>$plan->price);
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
         $user=$this->db->get('tbl_users')->row();
        if ($user)
        {
            return $user->firstname;
        }
    }

    public function get_user_by_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('tbl_users')->row();
    }


    public function logout()
    {

    }


    public function codeGeneratorKey($user_id,$iso)
    {
        $key = 0000 + $user_id;
        $key = str_pad($user_id, 4, "0", STR_PAD_LEFT); // 0010
        $key =$iso.strval( $key );
        $this->db->where('id', $user_id);
        $data = [];
        $data['cle'] = $key;
        $this->db->update('tbl_users', $data);


    }

    private function welcome_email($key,$password,$client_mail)
    {
        // Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Recipients
            $mail->setFrom('from@example.com', 'Mailer');
            $mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
            $mail->addAddress('ellen@example.com');               // Name is optional
            $mail->addReplyTo('info@example.com', 'Information');
            $mail->addCC('cc@example.com');
            $mail->addBCC('bcc@example.com');

            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Bienvenue';
            $mail->Body = 'This is the HTML message body <b>in bold!</b>';

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }


    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tbl_users');
    }
}
