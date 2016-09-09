<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        
        $this->load->view('welcome/index');
    }
    public function login(){
         if($this->session->userdata('user_auth')){
            switch ($this->session->userdata('user_type')){
                case 'admin':
                    redirect('miiadmin/index');
                    break;
                case 'user':
                    redirect('miiuser/index');
                    break;
            }
         }else{
            $this->load->view('welcome/login'); 
         }
        
    }
    public function register(){
        $this->load->view('welcome/register');
    }
    public function auth() {
        if($this->is_ajax()){
            $data=  $this->input->post();
            $login=$this->welcome_model->login($data);
        
            if($login){
                if($login['status']==2){
                    $text='Cuenta en proceso de activación';
                    $result=array(
                        'error'=>2,
                        'msj'=>$text
                    );
                    echo json_encode($result);
                }else{
                    $this->session->set_userdata('user_auth', 'true');
                    $this->session->set_userdata('user_type', $login['profile']);
                    $this->session->set_userdata('user_id', $login['id']);
                    $result=array(
                        'success'=>1,
                        'msj'=>$login
                    );
                    echo json_encode($result);
                }
            }else{
                $result=array();
                echo json_encode($result);
            }
        }
    }
    public function is_ajax() {
        if (!$this->input->is_ajax_request()) {
            exit('No direct script access allowed');
        }else{
            return true;
        }
    }
    
    public function logout() {
        $this->session->sess_destroy();
        redirect();
    }
}
