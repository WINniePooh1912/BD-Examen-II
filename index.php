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
				echo "<p class='parrafo'> </p>";
			} else {
				$id = $_SESSION['id'];
			$usr = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM usuarios WHERE id = '$id'"));

			$_SESSION['usuario'] = $usr['usuario'];

			echo "<h3>¡Bienvenido <span>" .$_SESSION['usuario'] ."</span>!</h3>";
			echo "<p class='parrafo'>Tu florería en Guadalajara </p>";
			// echo "<p class='parrafo'>¡Bienvenido a nuestra florería en Guadalajara! Nuestra pasión por las flores va más allá del simple arte de crear arreglos: cada ramo es un testimonio de una historia única. Un día, una joven llamada Ana vino a nuestra tienda buscando flores para celebrar el aniversario de sus abuelos. Nos contó cómo, hace 50 años, su abuelo solía llevar a su abuela un ramo de girasoles cada semana. Nos inspiró tanto la ternura de su historia que creamos un arreglo especial con girasoles, margaritas y lirios, simbolizando el amor duradero y la belleza de los recuerdos compartidos. Desde ese momento, nos comprometimos a ser parte de las historias más bellas y entrañables de nuestros clientes. Así que, cuando nos visites, sabrás que no solo estás eligiendo flores, estás compartiendo momentos que perdurarán en el tiempo. </p>";
			echo "<p class='parrafo'>¡Bienvenido a nuestra florería en Guadalajara! Nuestra pasión por las flores va más allá del simple arte de crear arreglos: cada ramo es un testimonio de una historia única.</p><p class='parrafo'>Un día, una joven llamada Ana vino a nuestra tienda buscando flores para celebrar el aniversario de sus abuelos. Nos contó cómo, hace 50 años, su abuelo solía llevar a su abuela un ramo de girasoles cada semana.</p><p class='parrafo'>Nos inspiró tanto la ternura de su historia que creamos un arreglo especial con girasoles, margaritas y lirios, simbolizando el amor duradero y la belleza de los recuerdos compartidos. Desde ese momento, nos comprometimos a ser parte de las historias más bellas y entrañables de nuestros clientes. Así que, cuando nos visites, sabrás que no solo estás eligiendo flores, estás compartiendo momentos que perdurarán en el tiempo. </p>";
			echo "<p class='parrafo'><span> ¿Buscas flores frescas y hermosas para alegrar tu día o sorprender a alguien especial? </span>Aquí somos tu florería de confianza en Guadalajara.</p>";
			echo "<p class='parrafo'>Ofrecemos una amplia variedad de flores frescas, arreglos florales personalizados y regalos para todas las ocasiones.</p>";
			}
		?>
	</section>
</body>
</html>