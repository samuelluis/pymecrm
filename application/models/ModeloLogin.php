<?php 

if(!defined('BASEPATH')) exit('No direct script access allowed');


class ModeloLogin extends CI_Model
{
	
	function __construct(){

		parent::__construct();
		$this->load->database();		
		$this->load->library('session');
	}




	function validarUsuarioRegistrar(){

			$datosValidar = array(			
			
			'usuario' => $_POST['usuario'],
			'pass' => $_POST['password']
		);

  		$queryLoguear = $this->db->get_where('usuarios', $datosValidar);
			 
	    return $queryLoguear->row_array();
	}

	function mostrarDatosPersonales(){

  
            $idLogeado = $this->session->userdata['id'];
		    $resultadoDatosPersonales = $this->db->query("SELECT * FROM usuarios WHERE id = '$idLogeado'");  
     		
        return $resultadoDatosPersonales->row_array();
	}



	function mostrarVentas(){

  
            $usuarioLogueado = $this->session->userdata['usuario'];
		    $resultadoVentas = $this->db->query("SELECT * FROM ventas WHERE usuario = '$usuarioLogueado'");  
     		
        return $resultadoVentas->result_array();
	}


	function registrarVentas($datosRegistrarventas){

 			 $queryRegistrar = $this->db->insert('ventas', array('cliente'=>$datosRegistrarventas['nombre'],
 			  'monto'=>$datosRegistrarventas['monto'],'descripcion' =>$datosRegistrarventas['descripcion'],
 			  'fecha' =>$datosRegistrarventas['fecha'], 'usuario' =>$datosRegistrarventas['usuario']));
	

	}





	function registrarUsuarios(){
		

		$datosRegistrar = array(			
			
			'txtNombreR' =>  $_POST['txtNombreR'],
			'txtApellidoR' => $_POST['txtApellidoR'],
			'telefono' => $_POST['txtTelefono'],
			'genero' => $_POST['genero'],
			'fechaNac' => $_POST['fechaNac'],
			'txtNombreUsuario' => $_POST['txtNombreUsuario'],
			'txtCorreo' => $_POST['txtCorreo'],
			'txtPass' => $_POST['txtPass'],
			'nombreEmpresa' => $_POST['txtNombreEmpresa'],
			'Tipoempresa' => $_POST['Tipoempresa'],
			'txtUbicacion' => $_POST['txtUbicacion']
		);

		$queryRegistrar = $this->db->insert('usuarios', array('nombre'=>$datosRegistrar['txtNombreR'], 'apellido'=>$datosRegistrar['txtApellidoR'],
			'telefono' =>$datosRegistrar['telefono'],'genero' =>$datosRegistrar['genero'], 
			'fechaNac' =>$datosRegistrar['fechaNac'],'usuario' =>$datosRegistrar['txtNombreUsuario'],
			'correo' => $datosRegistrar['txtCorreo'],'pass' =>$datosRegistrar['txtPass'],
			'nombreempresa' =>$datosRegistrar['nombreEmpresa'],'Tipoempresa' =>$datosRegistrar['Tipoempresa'],
			'ubicacion' =>$datosRegistrar['txtUbicacion']));

	}


	

	function actualizarDatos(){
			

		$datosActualizar = array(
            'nombre' => $this->input->post('nombre'),
            'apellido' => $this->input->post('apellido'),
            'telefono' => $this->input->post('telefono'),
            'genero' => $this->input->post('genero'),
            'correo' => $this->input->post('correo'),
            'nombreempresa' => $this->input->post('nombreempresa'),
            'tipoempresa' => $this->input->post('tipoempresa'),
            'ubicacion' => $this->input->post('ubicacion')
            );
 
		$idUsuario = $this->session->userdata['id'];
        $where = "id = '$idUsuario'"; 
		   
		$this->db->update('usuarios', $datosActualizar, $where);
		

	}

	
}