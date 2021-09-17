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
  <a href="usuarios.php"><i class="fa fa-user"></i></a> 
  <a class="active" href="registroUser.php"><i class="fa fa-registered"></i></a>
  <a href="print.php" target="_blank"><i class="fa fa-print"></i></a>
  <a href="logout.php"><i class="fa fa-power-off"></i></a> 
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<h2>Registrarse</h2>
<hr/>
<form action="register.php" method="POST">
  <div class="container">
	<input type="text" placeholder="Primer Nombre" name="primerNombre" required>
    <input type="text" placeholder="Segundo Nombre" name="segundoNombre" required>
    <input type="text" placeholder="Apellidos" name="apellidos" required>
      <input type="text" placeholder="Usuario" name="username" required>
    <input type="password" placeholder="Contraseña" name="psw" required>
    <input type="password" placeholder="Repetir Contraseña" name="psw-repeat" required>
    <div class="clearfix">
      <button type="submit" class="signupbtn">Guardar</button>
	  <button type="reset" class="cancelbtn">Cancelar</button>
    </div>
  </div>
</form>