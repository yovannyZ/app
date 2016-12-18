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
		$this->load->view('master_admin', $data); 
	}



	public function get(){
		$list = $this->Usuario_model->getUsers();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $usuario) {
			$no++;
			$row = array();
			$row[] = $usuario->usuario;
			$row[] = $usuario->estado;
		
			//add html for action
			$row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_person('."'".$usuario->id."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
				  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="eliminar('."'".$usuario->id."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
		
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->Usuario_model->count_all(),
						"recordsFiltered" => $this->Usuario_model->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function add(){
		$this->_validate();
		$data = array(
			'id' => 0,
			'usuario' => $this->input->post('usuario'),
			'contrasena' => $this->input->post('contrasena'),
			'estado' => 0
		);

		$this->Usuario_model->add($data);
		echo json_encode(array('status' => TRUE));
	}

	private function _validate(){
		$dat = array();
		$dat['error_string'] = array();
		$dat['inputerror'] = array();
		$dat['status'] = TRUE;

		if($this->input->post('usuario') == ''){
			$dat['inputerror'][] = 'usuario';
			$dat['error_string'][] = 'El Usuario es obligatorio';
			$dat['status'] = FALSE;
		}

		if($this->input->post('contrasena') == ''){
			$dat['inputerror'][] = 'contrasena';
			$dat['error_string'][] = 'La contraseña es obligatoria';
			$dat['status'] = FALSE;
		}

		if($dat['status'] === FALSE){
			echo json_encode($dat);
			exit();
		}
	}

	public function getUser($id){
		$data = $this->Usuario_model->getUser($id);
		echo json_encode($data);
	}

	public function update(){
		$this->_validate();
		$data = array(
				'usuario' => $this->input->post('usuario'),
				'contrasena' => $this->input->post('contrasena'),
			);
		$this->Usuario_model->update(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function delete(){
		$data = array(
				'estado' => 1
			);
		$this->Usuario_model->delete(array('id' => $this->input->post('idEliminar')), $data);
		echo json_encode(array("status" => TRUE));
	}

}