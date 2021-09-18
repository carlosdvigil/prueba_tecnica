<?php
include("conex.php");
include("session.php");

$id = $_POST['id'];
$primerNombre = $_POST['primerNombre'];
$segundoNombre = $_POST['segundoNombre'];
$apellidos = $_POST['apellidos'];
$username = $_POST['username'];
$password = $_POST['psw'];

$sql = "UPDATE usuarios SET primerNombre='$primerNombre', segundoNombre='$segundoNombre', apellidos='$apellidos', username='$username', psw='$password' 
WHERE id='$id'";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Registro actualizado exitósamente");';
	echo 'window.location="usuarios.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Error en proceso de actualización de registro!");';
	echo 'window.location="usuarios.php";';
	echo '</script>';
}
?>