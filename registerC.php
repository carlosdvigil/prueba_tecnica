<?php
include("conex.php");
include("session.php");

$primerNombre = $_POST['primerNombre'];
$segundoNombre = $_POST['segundoNombre'];
$apellidos = $_POST['apellidos'];
$birthday = $_POST['birthday'];
$telefono = $_POST['telefono'];
$celular = $_POST['celular'];
$direccion = $_POST['direccion'];
$pais = $_POST['pais'];


$sql = "INSERT INTO contactos(primerNombre, segundoNombre, apellidos, birthday, telefono, celular, direccion, pais) 
VALUES('$primerNombre', '$segundoNombre', '$apellidos', '$birthday', '$telefono', '$celular', '$direccion', '$pais')";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("El Usuario se agrego satisfactoriamente");';
	echo 'window.location="index.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("El usuario ya existe!");';
	echo 'window.location="registroUser.php";';
	echo '</script>';
}
?>