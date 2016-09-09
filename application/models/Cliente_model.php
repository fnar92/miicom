<?php  
if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
class Cliente_model extends CI_Model {
    public function __construct(){
            parent::__construct();
    }
    public function getAll() {
        $query=$this->db->get('mii_cliente');
        return $query->result();
    }
    
    public function getById($id) {
        $this->db->where('cid',$id);
        $query=$this->db->get('mii_cliente');
        if($query->num_rows()==1){
            $data=$query->row();
            return $data;
        }else{
            return null;
        }
    }
    
    public function updateCliente($id, $data_s) {
        $this->db->where('cid', $id);
        return $this->db->update('mii_cliente', $data_s);
    }
    
    public function createCliente($data_s) {
        return $this->db->insert('mii_cliente', $data_s);
    }
}