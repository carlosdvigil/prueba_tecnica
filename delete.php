<?php
include("conex.php");
include("session.php");

$id = $_GET['id'];


$sql = "DELETE FROM usuarios WHERE username='$id'";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Registro eliminado exitósamente");';
	echo 'window.location="usuarios.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Error eliminando registro!");';
	echo 'window.location="usuarios.php";';
	echo '</script>';
}
?>