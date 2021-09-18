<?php
include("conex.php");
include("session.php");

$id = $_POST['id'];
$primerNombre = $_POST['primerNombre'];
$segundoNombre = $_POST['segundoNombre'];
$apellidos = $_POST['apellidos'];
$birthday = $_POST['birthday'];
$telefono = $_POST['telefono'];
$celular = $_POST['celular'];
$direccion = $_POST['direccion'];
$pais = $_POST['pais'];

$sql = "UPDATE contactos SET primerNombre='$primerNombre', segundoNombre='$segundoNombre', apellidos='$apellidos', birthday='$birthday', telefono='$telefono', celular='$celular', direccion='$direccion', pais='$pais' 
WHERE id='$id'";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Registro actualizado exitósamente");';
	echo 'window.location="contactos.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Error en proceso de actualización de registro!");';
	echo 'window.location="contactos.php";';
	echo '</script>';
}
?>