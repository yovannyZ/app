<?php

class Usuario_model extends CI_Model{

    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function getUsers(){
        $data = $this->db->get('login');
        return $data->result();
    }

    public function getUser()

}