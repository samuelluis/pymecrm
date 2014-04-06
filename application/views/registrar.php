<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>PymesIncs</title>
<link href="../../css/bootstrap.css" rel="stylesheet">
<link href="../../css/bootstrap-theme.css" rel="stylesheet">
<link href="../../css/desing.css" rel="stylesheet">

<link href="../../css/desingLogin.css" rel="stylesheet">
<script type="text/javascript" src='../../js/jquery.js'></script>
<script type="text/javascript" src='../../js/FuncionesJs.js'></script>
    <script src="../../js/jquery.maskedinput.js" type="text/javascript"></script>

</head>

<body>



  <?php

    $idregistrar = array('class' => 'idRegistrar');
    echo form_open('welcome/registrarUser',$idregistrar);

    ?>

<legend>Datos Personales</legend> 
    <input type="text" class="form-control" name='txtNombreR' id="txtNombreR" placeholder="Nombre">
    <input type="text" class="form-control" name='txtApellidoR' id="txtApellidoR" placeholder="Apellido">
    <input type="text" class="form-control" name='txtTelefono' id="txtTelefono" placeholder="Telefono">
     <select  id="genero" name='genero'>
        <option>Genero</option>
        <option>Hombre</option>
        <option>Mujer</option>

    </select>
    <input type="text" class="form-control exampleInputEmail1" name='fechaNac' id="fechaNac" placeholder="Fecha Nac.">
  
 <legend>Datos Usuario</legend> 
    <input type="text" class="form-control" id="txtNombreUsuario" name='txtNombreUsuario' placeholder="Nombre de usuario">
    <input type="email" class="form-control" id="txtCorreo" name='txtCorreo' placeholder="Correo">
    <input type="password" class="form-control" id="txtPass"  name='txtPass' placeholder="Contraseña">
    <input type="password" class="form-control" id="confirmartxtPass" name='confirmartxtPass' placeholder="Confirmar Contraseña">
 
  <legend>Datos Empresa</legend> 
    <input type="text" class="form-control" id="txtEmail" name='txtNombreEmpresa' placeholder="Nombre de empresa">
    <select  id="tipoEmpresa" name='Tipoempresa'>
        <option>Tipo de empresa</option>
        <option>Negocios de producción o manufactura</option>
        <option>Negocios de extracción</option>
        <option>Negocios de ventas al por menor</option>
        <option>Negocios de ventas al por mayor</option>

    </select>
    <input type="text" class="form-control" id="txtUbicacion" name='txtUbicacion' placeholder="Ubicacion">
 
  <button type="submit" id='btnRegistrarme' >Registrarme</button>
  <button type="button" id='btnCancelar' >Cancelar</button>

	


</body>
</html>
