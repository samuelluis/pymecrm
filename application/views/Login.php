<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>PymesIncs</title>
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap-theme.css" rel="stylesheet">
<link href="css/desing.css" rel="stylesheet">
<link href="css/desingLogin.css" rel="stylesheet">
<script type="text/javascript" src='js/jquery.js'></script>
<script type="text/javascript" src='js/FuncionesJs.js'></script>

</head>

<body>

		<?php

		$idLogin = array('class' => 'idLogin');
		echo form_open('welcome/validarUsuarios',$idLogin);

		?>
		<div class='form-group'>

	 <input type="text" name='usuario' class="form-control" id="txtUsuario" placeholder="Nombre de usuario">
  	 <input type="password" name='password' class="form-control" id="txtPassword" placeholder="Contraseña de usuario">
  
	 <button type="submit" id='btnEntrar' class="btn btnLogi btn-block btn-success">Entrar</button>

	


		</div>

		<?php

		echo form_close();

		?>


 	<a href='index.php/welcome/registrarUsuarios' id='registrarse'>¿Aun no tienes una cuenta? ¡Registrate!</a>





</body>
</html>
