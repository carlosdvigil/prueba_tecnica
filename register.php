<?php
include("conex.php");
include("session.php");

$primerNombre = $_POST['primerNombre'];
$segundoNombre = $_POST['segundoNombre'];
$apellidos = $_POST['apellidos'];
$username = $_POST['username'];
$password = $_POST['psw'];

$sql = "INSERT INTO usuarios(primerNombre, segundoNombre, apellidos, username, psw) 
VALUES('$primerNombre', '$segundoNombre', '$apellidos', '$username', '$password')";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("El Usuario se agrego satisfactoriamente");';
	echo 'window.location="usuarios.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("El usuario ya existe!");';
	echo 'window.location="registroUser.php";';
	echo '</script>';
}
?>