<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Acceso extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('Acceso_model');
    }

    public function get(){
      
       $data = $this->Acceso_model->get();
       $output = array("data" => $data);
		echo json_encode($data);
    }
}