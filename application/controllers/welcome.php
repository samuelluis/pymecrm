<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

function __construct(){
		parent::__construct();

		$this->load->model('ModeloLogin');	
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->helper('url'); 
	}


	public function index()
	{

		 if (isset($this->session->userdata['usuario']))
            {
              redirect('index', 'refresh');
            }
		

		$this->load->view('Login');
	}

	function validarUsuarios(){


		$datosUsuarios = $this->ModeloLogin->validarUsuarioRegistrar();


		if(empty($datosUsuarios)){

			echo "Usuario o contraseña incorrecta";

		}else{

		   echo "bien";

		   $datosUsuarios = array('usuario' => $datosUsuarios['usuario'],'id' => $datosUsuarios['id']);
	       $this->session->set_userdata($datosUsuarios); 
		}


	}


	    	
	public function registrarUsuarios()
	{
		$this->load->view('registrar');


	}

	function registrarUser(){


	$datosRegistrar = $this->ModeloLogin->registrarUsuarios();

	
	



	}

	
}

