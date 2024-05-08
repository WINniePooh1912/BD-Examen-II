<?php
session_start();

include "conn.php";

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

$usr = mysqli_query($con, "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contrasena = '$contrasena'");

$rowUsr = mysqli_fetch_array($usr);

// $usr['id'] = $_SESSION['id'];
$_SESSION['id'] = $rowUsr['id'];
// $_SESSION['usuario'] = $rowUsr['usuario'];

if(!isset($_SESSION['id'])) {
	header("Location: login.html");
} else {
	header("Location: index.php");
}
?>