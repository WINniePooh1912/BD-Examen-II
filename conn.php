<?php
$server = "localhost";
$data = "examen";
$user = "root";
$pass = "";

$con = mysqli_connect($server, $user, $pass, $data);
if(!$con) {
	die("Falla en la conexión".mysqli_connect_error()); }
?>