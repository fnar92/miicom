<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Miiadmin extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->check();
    }
    
    public function index(){
        view('miiadmin/index_view', NULL);
    }
    
    public function perfil() {
        view('miiadmin/perfil_view', NULL);
    }
    
    public function clientes() {
        view('miiadmin/clientes_view', NULL);
    }
    
    public function addCliente() {
        view('miiadmin/clientesadd_view', NULL);
    }
    
    public function logout() {
        $this->session->sess_destroy();
        redirect();
    }
    
    public function is_ajax() {
        if (!$this->input->is_ajax_request()) {
            exit('No direct script access allowed');
        }else{
            return true;
        }
    }
    public function check() {
        if($this->session->userdata('user_type')!='admin'||!$this->session->userdata('user_auth')){
            redirect();
        }else{
            return true;
        }
    }
    
}
