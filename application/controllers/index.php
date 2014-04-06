<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {

function __construct(){
		parent::__construct();

		$this->load->model('ModeloLogin');	
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->helper('url'); 
	}


	public function index()
	{

            if (empty($this->session->userdata['usuario']))
            {
              redirect('../', 'refresh');
            }    
              

        $datosPersonales = $this->ModeloLogin->mostrarDatosPersonales();
        $ventasRealizadas = $this->ModeloLogin->mostrarVentas();      
		$emailLogeado = $this->session->userdata['usuario'];
		$this->load->view('inicio', array('usuario' => $emailLogeado, 
			'datosPersonales' => $datosPersonales,'ventas' => $ventasRealizadas));
	}

	function agregarNuevasVentas(){

        $UsuarioLogeado = $this->session->userdata['usuario'];
        $datosRegistrarventas = array(            
            
            'nombre' =>  $_POST['nombreCliente'],
            'descripcion' => $_POST['descripcion'],
            'monto' => $_POST['monto'],
            'fecha' => $this->_tiempoActual(),
            'usuario' => $UsuarioLogeado
        );
        
        $this->ModeloLogin->registrarVentas($datosRegistrarventas); 
        $retornoVentas['ventasGuardadas'] = $this->ModeloLogin->mostrarVentas();
        echo $this->load->view('vistaVentas',$retornoVentas,TRUE);
	}


     function _tiempoActual(){
        date_default_timezone_set('Europe/Brussels');
        $fecha = date("d-m-Y H:i A");
        return  $fecha;
    }


 function actualizarDatos(){

        $this->ModeloLogin->actualizarDatos();
    

    }



   
   

    function cerrarSession(){

    $this->session->unset_userdata('usuario');
    $this->session->sess_destroy();
    redirect('../','index');


    }


}
	