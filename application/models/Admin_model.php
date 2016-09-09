<?php  
if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
class Admin_model extends CI_Model {
    public function __construct(){
            parent::__construct();
    }
    public function getById($id) {
        $this->db->where('id',$id);
        $query=$this->db->get('mii_admin');
        if($query->num_rows()==1){
            $data=$query->row();
            return $data;
        }else{
            return null;
        }
    }
    public function updateUser($id, $data_s) {
        $this->db->where('id', $id);
        $this->db->update('mii_admin', $data_s);
        return $this->getById($id);
    }
}