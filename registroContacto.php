<?php
	include("session.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/estilos.css" /> 
</head>
<body>
<div class="icon-bar">
  <a href="home.php"><i class="fa fa-home"></i></a> 
  <a href="contactos.php"><i class="fa fa-address-book"></i></a> 
  <a class="active" href="registroContacto.php"><i class="fa fa-registered"></i></a>  
  <a href="usuarios.php"><i class="fa fa-user"></i></a> 
  <a href="logout.php"><i class="fa fa-power-off"></i></a> 
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<h2>Crear Contacto</h2>
<hr/>
<form action="registerC.php" method="POST">
  <div class="container">
	  <input type="text" placeholder="Primer Nombre" name="primerNombre" required>
    <input type="text" placeholder="Segundo Nombre" name="segundoNombre" required>
    <input type="text" placeholder="Apellidos" name="apellidos" required>
  	<label>Fecha de Nacimiento</label>
    <input type="date" name="birthday" required>
    <input type="text" placeholder="Telefono" name="telefono" required>
    <input type="text" placeholder="Celular" name="celular" required>
    <input type="text" placeholder="Dirección" name="direccion" required>
    <input type="text" placeholder="Pais" name="pais" required>
    <div class="clearfix">
      <button type="submit" class="signupbtn">Guardar Contacto</button>
	  <button type="reset" class="cancelbtn"><a href="contactos.php">Cancelar</a></button>
    </div>
  </div>
</form>