<?php

class Login_model extends CI_Model{

     function __construct(){
         parent::__construct();
         $this->load->database();
     }

     public function getUser($usuario){
         $this->db->select('*');
         $this->db->from('login');
         $this->db->where('usuario', $usuario);
         $this->db->where('estado', 'ACT');
         $data = $this->db->get();

         if($data->num_rows() > 0){
              return $data->row();
         }else{
             return null;
         }
        
     }
}