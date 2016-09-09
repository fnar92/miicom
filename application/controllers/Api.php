<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {
    private $idUser;
    
    public function __construct() {
        parent::__construct();
        $this->set();
    }
    
    public function getUser() {
        $this->is_ajax();
        $user=$this->admin_model->getById($this->idUser);
        echo json_encode($user);
    }
    
    public function updateUser() {
        $this->is_ajax();
        $data=$_POST=json_decode(file_get_contents('php://input'),true);
        $id=$data['user']['id'];
        $data_s=$data['data'];
        $response=$this->admin_model->updateUser($id, $data_s);
        echo json_encode(array('data'=>$response));
    }
    
    public function getClientes() {
        echo json_encode($this->cliente_model->getAll());
    }
    
    public function getClienteById($id) {
        echo json_encode($this->cliente_model->getById($id));
    }
    
    public function set() {
        $this->check();
        $this->idUser=$this->session->userdata('user_id');
    }
    public function is_ajax() {
        if (!$_SERVER['REQUEST_METHOD'] == 'POST') {
            header('Content-Type: application/json');
            exit('not_allowed');
        }
    }
    
    public function check() {
        if($this->session->userdata('user_type')!='admin'||!$this->session->userdata('user_auth')){
            header('Content-Type: application/json');
            exit('not_allowed');
        }else{
            return true;
        }
    }
}
