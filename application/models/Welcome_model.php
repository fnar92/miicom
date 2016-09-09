<?php  
if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
class Welcome_model extends CI_Model {
    public function __construct(){
            parent::__construct();
    }
    public function login($data) {
        $usr=$data['email'];
        $pass=$data['pass'];
        $result=array();
        $this->db->where('email',$usr);
        $this->db->where('pass', sha1($pass));
        $query=$this->db->get('mii_admin');
        if($query->num_rows()==1){
            $data=$query->row();
            return $result=array(
                'status'=>$data->status,
                'profile'=>'admin',
                'id'=>$data->id
            );
        }else{
            return null;
        }
    }
}