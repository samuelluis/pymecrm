<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>PymesIncs</title>
<link href="../css/bootstrap.css" rel="stylesheet">
<link href="../css/bootstrap-theme.css" rel="stylesheet">
<link href="../css/desing.css" rel="stylesheet">
<script type="text/javascript" src='../js/jquery.js'></script>
 <script type="text/javascript" src="../js/canvasjs.js"></script>
<link href="../font-awesome-4.0.3/css/font-awesome.css" rel="stylesheet">
<script type="text/javascript" src='../js/FuncionesJs.js'></script>


</head>

<body>
	

	<div class='headerInicio'>
	<p  id='menuInicio'><i class="fa menuInicio fa-bars fa-2x"></i></p>
	<p  id='mensajesPrivado'><i class="fa fa-envelope fa-2x"></i></p>
		<h4 class='letrasHeader'> Geskep PYME</h4>
	
			</div>


	<div class="menuOpciones">
	
		<img class='fotoPerfil' src='../LogoEmpresas/ecoInc.jpg'></img>

		<p>¡Bienvenido <?php echo ($usuario) ?>!</p>
		
			<hr/>
			<a class='Ventas'><i class='fa fa-usd   fa-1x'></i> Ventas</a>
			<hr/>
			<a class='Almacen'><i class='fa fa-folder-open  fa-1x'></i>Almacen</a>
			<hr/>
			<a class='Reportes'><i class='fa fa-signal  fa-1x'></i>  Reportes</a>
			<hr/>
			<a class='Economistas'><i class='fa fa-comments  fa-1x'></i> Economistas</a>
			<hr/>
			<a class='configuracion'> <i class='fa fa-cogs  fa-1x'></i> Configuración</a>

			<hr/>
			<a href='index/cerrarSession' class='cerrarSesion'> <i class='fa fa-power-off  fa-1x'></i> Cerrar sesión </a>

		
		
		</div>

<div class='main'>

			<div class='cuadroConfiguracion'>
<p class='letrasConfiguracion'>Configuración</p>
	<i id='cerrarConfiguracion' class="fa fa-times-circle fa-2x"></i>
	<hr>
				<?php

$idActualizarDatos = array('class' => 'actualizarDatos');

echo form_open("index/actualizarDatos",$idActualizarDatos);




$btnActualizarDatos = array(
    'name' => 'btnActualizarDatos',
	'value' => 'Actualizar Datos',
	'class' => 'btnActualizarDatos'
	 );
$btnCambiarPass = array(
    'name' => 'btnCambiarPass',
	'value' => 'Cambiar Contraseña',
	'class' => 'btnCambiarPass',
	'type' => 'button',
	'id' => 'cambiarContra'
	 );



	echo form_input('nombre',$datosPersonales['nombre'],"class='form-control nombre'");
	echo form_input('apellido',$datosPersonales['apellido'],"class='form-control apellido'");
	echo form_input('telefono',$datosPersonales['telefono'],"class='form-control telefono'" );
	echo form_input('genero',$datosPersonales['genero'],"class='form-control genero'");
	echo form_input('correo',$datosPersonales['correo'],"class='form-control correo'");
	echo form_input('nombreempresa',$datosPersonales['nombreempresa'],"class='form-control nombreempresa'");
	echo form_input('tipoempresa',$datosPersonales['tipoempresa'],"class='form-control tipoempresa'");
	echo form_input('ubicacion',$datosPersonales['ubicacion'],"class='form-control ubicacion'");
	echo form_submit($btnActualizarDatos);
	echo form_input($btnCambiarPass);
	

echo form_close();


?>



			

			</div>


<div class='mensajePrivado'>

		<a class='nuevoMensaje' >Enviar nuevo mensaje</a>
		<hr>

	<div class='usuario'>
		<div class='imagenUsuarioMensaje'>
			
			<img class='imagenUsuarioMensaje' src="../logoEmpresas/ecoInc.jpg">
		</div>	

		<p class='NombreUsuarioMensaje'><b> JeuryInc</b></p>

		<p class='mensajeUsuarioMensaje'> Weeeyyss! Klq Menool ...</p>

		<p class='horaUsuarioMensaje'> 02:24 AM</p>
		<hr >
	</div>

	<div class='usuario'>
		<div class='imagenUsuarioMensaje'>
			<img class='imagenUsuarioMensaje' src="../logoEmpresas/ecoInc.jpg">
		</div>	

		<p class='NombreUsuarioMensaje'><b> Kimberlin_06</b></p>

		<p class='mensajeUsuarioMensaje'> Mira que hora he vamos ...</p>

		<p class='horaUsuarioMensaje'> 00:41 AM</p>
		<hr >
	</div>

	<div class='usuario'>
		<div class='imagenUsuarioMensaje'>
			
			<img class='imagenUsuarioMensaje' src="../logoEmpresas/ecoInc.jpg">
		</div>	

		<p class='NombreUsuarioMensaje'><b> Jenifer09</b></p>

		<p class='mensajeUsuarioMensaje'> Que tu haces? :3 ...</p>

		<p class='horaUsuarioMensaje'> 11:17 PM</p>
		<hr class='divisorMensajeUsuario'>
	</div>

	<div class='usuario'>
		<div class='imagenUsuarioMensaje'>
			
		
			<img class='imagenUsuarioMensaje' src="../logoEmpresas/ecoInc.jpg">
		</div>	

		<p class='NombreUsuarioMensaje'><b> Brauly18</b></p>

		<p class='mensajeUsuarioMensaje'> Que llueva, Tengo TO' ...</p>

		<p class='horaUsuarioMensaje'> 10:14 PM</p>
		<hr class='divisorMensajeUsuario'>
	</div>

		<a class='verMasUsuarioMensaje'href="">Ver Todos..</a>


</div>


<div class='nuevoMensajeUsuario'>
		<p id='cerrarMensajeNuevo'><i  class="fa fa-times fa-2x"></i></p>
<?php

$idenviarMensajes = array('class' => 'enviarMensajes');

echo form_open("index/enviarMensaje",$idenviarMensajes);



    $usuarioMensaje = array(
		'name' =>  'nombreUsuario',
		'placeholder' => 'Nombre del usuario',
		'class' => 'txtUsuarioMensaje'
		);
	$mensajeUsuario = array(
	    'name' =>  'cuerpoMensaje',
		'class' => 'txtCuerpoMensaje',
	    'placeholder' => 'Cuerpo del Mensaje',
       	'rows'  => '5',
        'cols'  => '10'
		);
	$enviarMensaje = array(
		'name' =>  'btnEnviarMsj',
		'class' => 'btnEnviarMsj',
		'type' => 'submit',
		'value' => 'Enviar Mensaje'

		);

	echo form_input($usuarioMensaje);
	echo form_textarea($mensajeUsuario);
	echo form_input($enviarMensaje);


	echo form_close();
?>

</div>
	<div class='cuadroAlmacen'>
<p class='letrasConfiguracion'>Almacen</p>
	<i id='cerrarAlmacen' class="fa fa-times-circle fa-2x"></i>
	<hr>
				<?php

$idmensajePrivados = array('class' => 'mensajePrivados');

echo form_open("index/enviarMensaje",$idmensajePrivados);



echo form_close();


?>
	</div>
			<div class='cuadroEconomista'>
<p class='letrasConfiguracion'>Recibe consejos</p>
	<i id='cerrarEconomista' class="fa fa-times-circle fa-2x"></i>
		<?php

$idenviarMensajes = array('class' => 'enviarMensajes');

echo form_open("index/enviarMensaje",$idenviarMensajes);



    $usuarioMensaje = array(
		'name' =>  'nombreUsuario',
		'placeholder' => 'Nombre del usuario',
		'class' => 'txtUsuarioMensaje'
		);
	$mensajeUsuario = array(
	    'name' =>  'cuerpoMensaje',
		'class' => 'txtCuerpoMensaje',
	    'placeholder' => 'Cuerpo del Mensaje',
       	'rows'  => '5',
        'cols'  => '10'
		);
	$enviarMensaje = array(
		'name' =>  'btnEnviarMsj',
		'class' => 'btnEnviarMsj',
		'type' => 'submit',
		'value' => 'Enviar Mensaje'

		);

	echo form_input($usuarioMensaje);
	echo form_textarea($mensajeUsuario);
	echo form_input($enviarMensaje);


	echo form_close();
?>

	</div>

			<div class='cuadroVentas'>

  <p class='letrasConfiguracion'>Ventas</p>
	<i id='cerrarVentas' class="fa fa-times-circle fa-2x"></i>
	<hr>
			<?php
			$btnAgregar = array(
		'name' =>  'btnAgregarVentas',
		'class' => 'btnAgregarVentas',
		'value' => 'Agregar Ventas',
		'type' => 'button'
		);

$buscador = array(
		'name' =>  'buscadorVentas',
		'class' => 'txtBuscadorVentas',
		'placeholder' => 'Busca tus Ventas guardadas'
		);

echo form_input($btnAgregar);
echo form_input($buscador);
?>
<div class='tablaIngresos'>	
<table id="tablaIngresos">
		<thead>
			<tr class='filaArriba'>
				<th scope="col" class="rounded-q2">Cliente</th>
				<th scope="col" class="rounded-q2">Monto</th>
				<th scope="col" class="rounded-q3">Descripcion</th>
				<th scope="col" class="rounded-q3">Fecha</th>
				<th scope="col" class="rounded-q4">Acion</th>
			 </tr>
	    </thead>
        <tfoot>
    	
    </tfoot>
    <tbody id='tablaVentas'>
	
	
    	<?php 		


    	foreach ($ventas as $datosVentas) {
    		
        echo "<tr>";
		echo "<td>".$datosVentas['cliente']."</td>";
		echo "<td>".$datosVentas['monto']."</td>";
		echo "<td>".$datosVentas['descripcion']."</td>";
		echo "<td>".$datosVentas['fecha']."</td>";
		echo "<td><a><p class='btnModificarIngresos'><i class='fa fa-pencil fa-2x'>
		 </i></p></a><a href=\"index/eliminarIngresos?id=".$datosVentas['id']."\"><p class='eliminarIngresos'> <i class='fa fa-trash-o fa-2x'>
		 </i></p></a></a></td>";
		echo "</tr>";	
    	}

	?>

    </tbody>
</table>	
	</div>
	</div>


			
				<div class='cuadroReportes'>
<p class='letrasConfiguracion'>Reportes</p>
	<i id='cerrarReportes' class="fa fa-times-circle fa-2x"></i>
	<hr>

	  <select  id="tipoEmpresa" name='Tipoempresa'>
        <option>Tipo de Reportes</option>
        <option>Negocios de producción o manufactura</option>
        <option>Negocios de extracción</option>
        <option>Negocios de ventas al por menor</option>
        <option>Negocios de ventas al por mayor</option>

    </select>
	<?php
$idmensajePrivados = array('class' => 'mensajePrivados');

echo form_open("index/enviarMensaje",$idmensajePrivados);



echo form_close();

			

?>


<script type="text/javascript">
	
      window.onload = function () {
          var chart = new CanvasJS.Chart("chartContainer", {
              theme: "theme2",//theme1
              title:{
                  text: "Ingresos por meses"              
             },
              data: [              
              {
                  type: "column",
                  dataPoints: [
                  { label: "Enero", y: 1000 },
                  { label: "Feb.", y: 1500 },
                  { label: "Mar.", y: 42500 },
                  { label: "Abr.", y: 5000 },
                  { label: "Mayo", y: 78000 },
                  { label: "Jul.", y: 11000 },
                  { label: "Jun.", y: 1500 },
                  { label: "Agos.", y: 13000 },
                  { label: "Sept.", y: 12800 },
                  { label: "Oct.", y: 15000 },
                  { label: "Nov.", y: 25000 },
                  { label: "Dic.", y: 30000 }
                  ]
              }
              ]
          });

          chart.render();
      }
  </script>

 <div id="chartContainer" style="height: 300px; width: 100%;"></div>
	<div class='agregarVentas'>

  <p class='letrasConfiguracion'>Agregar Ventas</p>
	<i id='cerrarAgregarVentas' class="fa fa-times-circle fa-2x"></i>
	<hr>
<?php

	$idagregarVentas = array('class' => 'agregarVentas');

echo form_open("index/agregarNuevasVentas",$idagregarVentas);



?>

	 <input type="text" name='nombreCliente' class="form-control" id="txtCliente" placeholder="Nombre de Cliente">
  	 <input type="text" name='descripcion' class="form-control" id="txtDescripcion" placeholder="Descripcion">
	 <input type="text" name='monto' class="form-control" id="txtMonto" placeholder="Monto">

	 <input type="submit" name='btnAgregarVentas' class="btnAgregarNuevasVentas" id="btnAgregarVentas">
  
	

	<?php


echo form_close();


?>


	
 </div>
	
 </div>	


</div>


</div>

</body>
</html>
