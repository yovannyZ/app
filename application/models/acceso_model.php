<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Acceso_model extends CI_Model{

    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function get(){
        $this->db->from('t_acceso');
        $data = $this->db->get();
        return $data->result();
    }
}
