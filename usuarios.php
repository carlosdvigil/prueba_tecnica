<?php
	include("session.php");
	
	if(isset($_POST['search']))
	{
		$valueToSearh = $_POST['valueToSearh']; 
		$query = "SELECT * FROM usuarios WHERE primerNombre LIKE '%".$valueToSearh."%' OR apellidos LIKE '%".$valueToSearh."%'";
		$result = filterRecord($query);
	}
	else
	{
		$query = "SELECT *FROM usuarios";
		$result = filterRecord($query);
	}
	
	function filterRecord($query)
	{
		include("conex.php");
		$filter_result = mysqli_query($mysqli, $query);
		return $filter_result;
	}
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
  <a href="registroContacto.php"><i class="fa fa-registered"></i></a>
  <a class="active" href="usuarios.php"><i class="fa fa-user"></i></a> 
  <a href="logout.php"><i class="fa fa-power-off"></i></a> 
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<h2>Usuarios</h2>
<hr/>

<div class="container">

<form action="" method="POST">
<input type="search" name="valueToSearh" placeholder="Búsqueda">
<button type="submit" class="signupbtn" name="search" >Buscar</button>
<button type="submit" class="signupbtn" name="add"><a href="registroUser.php">Crear Nuevo</a></button>
</form>
<br />
<?php
