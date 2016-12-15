<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller{
	public $data;
	public $tabla = 'login';

	function __construct(){
		parent::__construct();
		$this->load->model('Usuario_model');
		$this->data = array(
            'titulo' => 'App - Usuario',
            'vista' => 'usuario/index',
			'tituloPagina' => 'Administración de Usuarios',
			'script' => 'si');
	}

	public function index(){
		$data = $this->data;
		$data['usuarios'] = $this->Usuario_model->getUsers();
		$this->load->view('master_admin', $data); 
	}

		public function eliminar($id){
			$this->Usuario_model->update($id,'INC');
			echo json_encode(array("status" => TRUE));
    }

	public function getUsers(){
		$list = $this->Usuario_model->getUsers();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $usuario) {
			$no++;
			$row = array();
			$row[] = $usuario->usuario;
			$row[] = $usuario->estado;
		
			//add html for action
			$row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_person('."'".$usuario->usuario."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
				  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_person('."'".$person->usuario."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
		
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->person->count_all(),
						"recordsFiltered" => $this->person->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

}