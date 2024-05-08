<?php
session_start();

include "conn.php";

$usuario = $_POST['usuario'];
$correo = $_POST['correo'];
$edad = $_POST['edad'];
$sexo = $_POST['sexo'];
$estado_civil = $_POST['estado_civil'];
$contrasena = $_POST['contrasena'];

// $usr = mysql_fetch_array(mysql_query($con, "INSERT INTO usuarios(usuario, correo, edad, sexo, estado_civil, contrasena) VALUES('$usuario','$correo','$edad', '$sexo', '$estado_civil', '$contrasena')"));
$usr = mysqli_query($con, "INSERT INTO usuarios(usuario, correo, edad, sexo, estado_civil, contrasena) VALUES('$usuario','$correo','$edad', '$sexo', '$estado_civil', '$contrasena')");

if(!isset($_SESSION['id'])) {
	header("Location: login.html");
} else {
	header("Location: index.php");
}
?>