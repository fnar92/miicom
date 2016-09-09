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
}