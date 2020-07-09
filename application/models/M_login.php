<?php
/**
 * Created by PhpStorm.
 * User: Shinta
 * Date: 6/1/2018
 * Time: 12:29 AM
 */

class M_login extends CI_Model {

    function login($username, $password){
        $this->db->from('user');
        $this->db->where('username', $username);
        $this->db->where('password', md5($password));
        $a = $this->db->get();
        if ($a->num_rows() == 1){
            $data = $a->result_array();
            $this->session->set_userdata('id', $data[0]['id']);
            $this->session->set_userdata('username', $data[0]['username']);
            $this->session->set_userdata('user_level', $data[0]['user_level']);
            return true;
        }
        else{
            return false;
        }
    }

    function registeruser($datauser){
        $this->db->insert('user',$datauser);
        return $this->db->insert_id();
    }

    function registerpeneliti($datapeneliti){
        $this->db->insert('peneliti',$datapeneliti);
    }

    function registerresponden($dataresponden){
        $this->db->insert('responden',$dataresponden);
    }
}