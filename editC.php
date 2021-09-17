<?php
	include("session.php");
	include("conex.php");
	$id = $_GET['id'];
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
  <a href="contactos.php"><i class="fa fa-user"></i></a> 
  <a class="active" href="registroContacto.php"><i class="fa fa-registered"></i></a>
  <a href="logout.php"><i class="fa fa-power-off"></i></a> 
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<h2>Actualizar</h2>
<hr/>

<form action="update.php" method="POST">
  <div class="container">
  <?php
	$result = mysqli_query($mysqli,"SELECT * FROM contactos WHERE id ='$id'");
	while($row = mysqli_fetch_array($result))
	{
	echo"<input type='hidden' name='id' value='{$row['id']}' required>";
    echo"<input type='text' placeholder='Primer Nombre' name='primerNombre' value='{$row['primerNombre']}' required>";
    echo"<input type='text' placeholder='Segundo Nombre' name='segundoNombre' value='{$row['segundoNombre']}' required>";
    echo"<input type='text' placeholder='Apellidos' name='apellidos' value='{$row['apellidos']}' required>";
    echo"<input type='text' placeholder='birthday' name='birthday' value='{$row['birthday']}' required>";
    echo"<input type='text' placeholder='telefono' name='telefono' value='{$row['telefono']}' required>";
    echo"<input type='text' placeholder='celular' name='celular' value='{$row['celular']}' required>";
    echo"<input type='text' placeholder='direccion' name='direcciion' value='{$row['direccion']}' required>";
    echo"<input type='text' placeholder='pais' name='pais' value='{$row['pais']}' required>";
    echo"<div class='clearfix'>";
    echo"<button type='submit' class='signupbtn'>Actualizar</button>";
	echo"</div>";
	}?>
  </div>
</form>