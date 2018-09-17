<?php

class Login extends CI_Controller{
    
    public function index(){
        $this->load->view('login');
    }
    public function do_login(){
        @$config = array(
            'pfw_ip'    => $this->input->server('REMOTE_ADDR'),
            'no_kamar'  => $this->input->post('no_kamar'),
            'email'     => $this->input->post('email')  
        );
        if(strlen($config['email']) == 0){
            redirect(base_url('login'));
        }else{
            if(!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i', $config['email'])){
                redirect(base_url('login'));
            }else{
                echo "login sukses";
            }
        }
    }
}