<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_data extends CI_Model {

    public function login($email){
        $where = array(
            'email' =>  $email
        );
        $this->db->where($where);
        $count_result = $this->db->count_all_results('user');
        if($count_result >= 1){
            $result = true;
        }else{
            $result = false;
        }
        return $result;
    }
    public function get_logedin_user($email){
        $where = array(
            'email' =>  $email
        );
        $this->db->select('hak_akses.hak_akses as hak_akses,uname,upass,email')
        ->join('hak_akses','user.id_hak_akses = hak_akses.id')
        ->where($where)
        ->from('user');
        return $this->db->get();
    }
}