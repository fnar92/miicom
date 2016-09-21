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
    
    public function updateCliente() {
        $this->is_ajax();
        $data=$_POST=json_decode(file_get_contents('php://input'),true);
        $data_s=$data['data'];
        $id=$data_s['cid'];
        unset($data_s['cid']);
        $response=$this->cliente_model->updateCliente($id, $data_s);
        echo json_encode(array('data'=>$response));
    }
    
    public function createCliente() {
        $this->is_ajax();
        $data=$_POST=json_decode(file_get_contents('php://input'),true);
        $data_s=$data['data'];
        $data_s['ccreated']=  date('Y-m-d');
        $response=$this->cliente_model->createCliente($data_s);
        echo json_encode(array('data'=>$response));
    }
    
    public function getClientes() {
        echo json_encode($this->cliente_model->getAll());
    }
    
    public function getClienteById($id) {
        echo json_encode($this->cliente_model->getById($id));
    }
    
    public function getPagosCliente($id) {
        echo json_encode($this->cliente_model->getPagosCliente($id));
    }
    
    public function getAdeudosCliente($id) {
        //echo json_encode($this->cliente_model->getAdeudosCliente($id));
        $today=  date('Y-m-d');
        $fecha_cliente='2016-08-23';
        
        echo $today;
        
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
