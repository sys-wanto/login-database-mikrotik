<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller{
    
    public function __construct()
	{
		parent::__construct();
		$this->load->model('M_data');
	}
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
                $logedin = $this->M_data->login($config['email']);
                if($logedin == true){
                    $member_datas = array(
                        'uname' =>  $this->M_data->get_logedin_user($config['email'])->row()->uname,
                        'upass' =>  $this->M_data->get_logedin_user($config['email'])->row()->upass,
                        'email' =>  $this->M_data->get_logedin_user($config['email'])->row()->email,
                        'hak_akses' =>  $this->M_data->get_logedin_user($config['email'])->row()->hak_akses
                    );
                    if($member_datas['hak_akses'] == 'Guest'){
                        $context = array(
                            'member_datas'  =>  $member_datas,
                            'logedin_as'    =>  'Guest'
                        );
                    }else
                    if($member_datas['hak_akses'] == 'Admin'){
                        $context = array(
                            'member_datas'  =>  $member_datas,
                            'logedin_as'    =>  'Admin'
                        );
                    }else{
                        $context = array(
                            'member_datas'  =>  $member_datas,
                            'logedin_as'    =>  'Error'
                        );
                    }
                }else{
                    $context = "login gagal / user tidak di temukan.";
                }
                echo json_encode($context);
            }
        }
    }
}