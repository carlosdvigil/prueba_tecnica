<?php
	include("session.php");
	
	if(isset($_POST['search']))
	{
		$valueToSearh = $_POST['valueToSearh']; 
		$query = "SELECT * FROM contactos WHERE primerNombre LIKE '%".$valueToSearh."%' OR segundoNombre LIKE '%".$valueToSearh."%' OR apellidos LIKE '%".$valueToSearh."%'";
		$result = filterRecord($query);
	}
	else
	{
		$query = "SELECT *FROM contactos";
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
  <a class="active" href="contactos.php"><i class="fa fa-address-book"></i></a> 
  <a href="registroContacto.php"><i class="fa fa-registered"></i></a>
  <a href="usuarios.php"><i class="fa fa-user"></i></a>
  <a href="logout.php"><i class="fa fa-power-off"></i></a> 
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<h2>Contactos</h2>
<hr/>

<div class="container">

<form action="" method="POST">
<input type="search" name="valueToSearh" placeholder="Búsqueda">
<button type="submit" class="signupbtn" name="search" >Buscar</button>
<button type="submit" class="signupbtn" name="add"><a href="registroContacto.php">Crear Nuevo</a></button>
</form>
<br />
<?php


echo "<table border='1'>
<tr>
<th>1er. Nombre</th>
<th>2do. Nombre</th>
<th>Apellidos</th>
<th>Fecha Nac.</th>
<th>Telefono</th>
<th>Celular</th>
<th>Direccion</th>
<th>Pais</th>
<th>Actualizar</th>
<th>Eliminar</th>
<th>Imprimir</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['primerNombre'] . "</td>";
echo "<td>" . $row['segundoNombre'] . "</td>";
echo "<td>" . $row['apellidos'] . "</td>";
echo "<td>" . $row['birthday'] . "</td>";
echo "<td>" . $row['telefono'] . "</td>";
echo "<td>" . $row['celular'] . "</td>";
echo "<td>" . $row['direccion'] . "</td>";
echo "<td>" . $row['pais'] . "</td>";
echo "<td><a href='editC.php?id=".$row['id']."'><img src='./images/edit.png' width= '30px' alt='Edit'></a></td>";
echo "<td><a href='deleteC.php?id=".$row['id']."'><img src='./images/delete.png' width= '30px' alt='Delete'></a></td>";
echo "<td><a href='printC.php?id=".$row['id']."'><img src='./images/print.png' width= '30px' alt='Print'></a></td>";
echo "</tr>";
}
echo "</table>";

?>

</body>
</html> 
