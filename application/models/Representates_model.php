<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Representates_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();

    }

    /**
     * @param  string Email address for login
     * @param  string User Password
     * @param  boolean Set cookies for user if remember me is checked
     * @param  boolean Is Staff Or Client
     * @return boolean if not redirect url found, if found redirect to the url
     */

    public function get_all()
    {
        return $this->db->get('tbl_representates')->result_array();
    }
     public function update($data)
    {
         $this->db->where('id', $id);
        return $this->db->update('tbl_representates',$data);
    }
    public function delete($id,$user_id)
    {
         $this->db->where('id', $id);
        $this->db->delete('tbl_representates');
         $CI =& get_instance();
        $CI->load->model('User_model');
        $representate=$CI->User_model->get_representate_by_user($user_id);
        if(!$representate)
        {
            $data['id']=$user_id;
            $data['role_id']=1;
            $CI->User_model->change_role($data);
        }
        
    }

    /**
     * @param  boolean If Client or Staff
     * @return none
     */

    /**
     * @param  integer ID to create autologin
     * @param  boolean Is Client or Staff
     * @return boolean
     */

    /**
     * Update user password from forgot password feature or set password
     * @param boolean $staff        is staff or contact
     * @param mixed $userid
     * @param string $new_pass_key the password generate key
     * @param string $password     new password
     */


}
