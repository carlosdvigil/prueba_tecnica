<?php
include("conex.php");
session_start();

$username = $_POST['username'];
$password = $_POST['psw'];
 
$username = $mysqli->real_escape_string($username);
 
$query = "SELECT username, psw FROM usuarios WHERE username = '$username' AND psw='$password'";
$result = $mysqli->query($query);
 
if($result->num_rows == 1) 
{
	$_SESSION['user'] = $username;
	header('Location: home.php');  
}
else{ 
	header('Location: login.html');
}
?>