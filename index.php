<?php
session_start();
include "conn.php";
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Floreria</title>
</head>
<body>
	<header>
		<nav>
			<?php if(!isset($_SESSION['id'])): ?>
			<a href="login.html">ingresa</a>
			<a href="registro.html">registrate</a>
			<?php endif; ?>
			<?php if(isset($_SESSION['id'])): ?>
			<a href="logout.php">cerrar sesión</a>
			<?php endif; ?>
		</nav>
	</header>
	<section>
		<h1>esto es una floreria</h1>
		<?php
			if(!isset($_SESSION['id'])) {
				echo "<h3>Bienvenido, huésped, usted aún no ha iniciado sesión </h3>";
				echo "<p class='parrafo'>Inicia sesión, por favorcito</p>";
			} else {
				$id = $_SESSION['id'];
			$usr = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM usuarios WHERE id = '$id'"));

			$_SESSION['usuario'] = $usr['usuario'];

			echo "<h3>Bienvenida personita con el usuario: <span>" .$_SESSION['usuario'] ."</span></h3>";
			echo "<p class='parrafo'>Somos una floreria nacida en Guadalajara, Jalisco, México <p>";
			}
		?>
	</section>
</body>
</html>