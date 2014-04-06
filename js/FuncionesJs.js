$(document).ready(function() {
	
	$('.idLogin').submit(function(){
	var txtUsuario = $("#txtUsuario").val();
	var txtPassword = $('#txtPassword').val();

			if(txtUsuario === ""){
				$("#txtUsuario").focus().after('<span class="error3">Ingrese su usuario para poder ingresar</span>');
				$(".error3").fadeOut(3500);
				return false;
			}
			if(txtPassword === ""){
				$("#txtUsuario").focus().after('<span class="error3">Ingrese su contraseña para poder ingresar</span>');
				$(".error3").fadeOut(3500);
				return false;
			}

		var datosLogin = {
			usuario: $('#txtUsuario').val(),
			password: $('#txtPassword').val()
		};


			$.post("index.php/welcome/validarUsuarios",datosLogin,function(respuesta){

				if(respuesta === 'bien'){


					window.location.href = 'http://localhost/PymesInc/index.php/index';

				} else {

				$("#txtUsuario").focus().after('<span class="error3">'+respuesta+'</span>');
				$(".error3").fadeOut(5000);
					
				}

			});

		return false;

	});

$(".actualizarDatos").submit(function(){

		var datos = {

				nombre: $('.nombre').val(),
				apellido: $('.apellido').val(),
				telefono: $('.telefono').val(),
				genero: $('.genero').val(),
				correo: $('.correo').val(),
				nombreempresa: $('.nombreempresa').val(),
				tipoempresa: $('.tipoempresa').val(),
				ubicacion: $('.ubicacion').val()

				};

				$.post("index/actualizarDatos",datos,function(respuesta){

				$(".nombre").focus().after('<span class="error4">Sus Datos han sido actualizado</span>');
				$(".error4").fadeOut(5000);

				});

		return false;


});


	$(".agregarVentas").submit(function(){
	
				var datos = {
				nombreCliente: $('#txtCliente').val(),
				descripcion: $('#txtDescripcion').val(),
				monto: $('#txtMonto').val()
				};
	
				$.post("index/agregarNuevasVentas",datos,function(respuesta){
						$("#tablaVentas").html(respuesta);

					$('.agregarVentas').slideUp("normal");
					$('.cuadroVentas').slideDown("normal");

			});
				
		return false;

	});



$('#cerrarAgregarVentas').click(function(){

	$(".agregarVentas").slideUp('normal');
	$(".cuadroVentas").slideDown('normal');

});



$('.btnAgregarVentas').click(function(){

	$(".cuadroVentas").slideUp('normal');
	$(".agregarVentas").slideDown('normal');

});



$('#mensajesPrivado').click(function(){

	$(".menuOpciones").hide();
	$(".mensajePrivado").toggle();

});

			$( ".txtBuscadorVentas").keyup(function() {
				
				var datos = {
					buscadorVentas: $( ".txtBuscadorVentas").val()
				};

				$.post("index/busquedaDeGasto",datos,function(respuesta){

					$("#tablaGasto").html(respuesta);
				});
			});

$('#cerrarMensajeNuevo').click(function(){

	$(".nuevoMensajeUsuario").slideUp('normal');

});

$('.nuevoMensaje').click(function(){
	$(".mensajePrivado").slideUp('normal')
	$(".nuevoMensajeUsuario").slideDown('normal');

});




$('.configuracion').click(function(){
		
	$(".menuOpciones").toggle();
	$(".cuadroConfiguracion").slideDown('normal');
	

	});
$('.Economistas').click(function(){
		
	$(".menuOpciones").toggle();
	$(".cuadroEconomista").slideDown('normal');
	

	});

$('.Reportes').click(function(){
		
	$(".menuOpciones").toggle();
	$(".cuadroReportes").slideDown('normal');
	

	});

$('.Almacen').click(function(){
		
	$(".menuOpciones").toggle();
	$(".cuadroAlmacen").slideDown('normal');
	

	});

$('.Ventas').click(function(){
		
	$(".menuOpciones").toggle();
	$(".cuadroVentas").slideDown('normal');
	

	});

	
	$('#cerrarEconomista').click(function(){

	$(".cuadroEconomista").slideUp('normal');

	});
	$('#cerrarVentas').click(function(){		
	$(".cuadroVentas").slideUp('normal');	

	});
	$('#cerrarAlmacen').click(function(){		
	$(".cuadroAlmacen").slideUp('normal');	

	});
	$('#cerrarReportes').click(function(){		
	$(".cuadroReportes").slideUp('normal');	

	});

	
	$('#cerrarConfiguracion').click(function(){		
	$(".cuadroConfiguracion").slideUp('normal');	

	});



	


$('#btnCancelar').click(function(){
	window.location.href = 'http://localhost/PymesInc/';


});







	$('#menuInicio').click(function(){
			$(".cuadroVentas").slideUp('normal');
			$(".cuadroEconomista").slideUp('normal');
			$(".cuadroAlmacen").slideUp('normal');
			$(".cuadroConfiguracion").slideUp('normal');
			$(".cuadroReportes").slideUp('normal');
	$(".mensajePrivado").hide();

	$(".cuadroConfiguracion").hide();
				$(".menuOpciones").animate({
					width:"toggle"
				},500);
				$(".main").animate({
					right: parseInt($(".menuOpciones").css("right"))== 0 ?"-="+$(".menuOpciones").outerWidth() : 0
				},500);		
			

	});

	$("#fechaNac").mask("99/99/9999");



});