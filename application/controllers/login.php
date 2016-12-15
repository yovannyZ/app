<?php

class Login extends CI_Controller{

    public $usuario;
    public $data;

    function __construct(){
        parent::__construct();
        $this->load->model('Login_model');
        $this->data = array(
            'titulo' => 'App - Login',
            'vista' => 'login/index');
    }

    public function index(){
        $data=$this->data;
        $this->load->view('master',$data);              
    }

    public function validar(){
        $data=$this->data;
        $username = $this->input->post('username');
        $contrasena = $this->input->post('password');

        if($this->_validarUsuario($username)){
            if($this->_validarContrasena($contrasena)){
                redirect('usuario/index');
            }else{
                $data['error'] = 'Contraseña incorrecta';
                $this->load->view('master',$data);
            }
        } else{
            $data['error'] = 'Usuario no existe o esta anulado';
            $this->load->view('master',$data);
        }
    }

    private function _validarContrasena($contrasena){
        if($this->usuario->contrasena == $contrasena){
            return true;
        }else{
            return false;
        }
    }

    private function _validarUsuario($username){
         $this->usuario= $this->Login_model->getUser($username);

          if(isset($this->usuario)){
            return true;
        } else{
            return false;
        }
    }
}