<?php

class Usuario extends CI_Controller{
	public $data;

	function __construct(){
		parent::__construct();
		$this->load->model('Usuario_model');
		$this->data = array(
            'titulo' => 'App - Usuario',
            'vista' => 'usuario/index');
	}

	public function index(){
		$data = $this->data;
		$data['usuarios'] = $this->Usuario_model->getUsers();
		$this->load->view('master_admin', $data); 
	}
}