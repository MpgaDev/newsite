<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Learning page - Home</title>
</head>
<body>
	<!-- HTML BASICO -->
	<h1> Tururu </h1>
	</br>
	<?php 
		//PRINT EN HTML USANDO ECHO
		echo 'hola PHP!';
		//Se puede mezclar echo con tags HTML
		echo '</br>'; //se renderea
		echo 'Segunda linea';
		echo '</br>'
	?>
	<?php
		//Las variables solo necesitan un "$", no estan fuertemente tipadas como en otros lenguajes
		$nombre = "Geraldine";
		$edad = 918;
		//echo de variables
		echo $nombre;
		echo '<h4> Mi nombre es: '.$nombre.' <h1>';
		echo '<h4> Mi edad es: '.$edad.' <h1>';
		//se pueden usar doble comillas
		echo "<h4> Mi nombre es: $nombre <h4>";

	?>

	<h2> Ejemplos de aprendizaje </h2>
	<ul>
		<li><a href="array.php">Arrays</a></li>
		<li><a href="forloops.php">Bucle for</a></li>
		<li><a href="dowhileloop.php">Bucles while y do while</a></li>
		<li><a href="ifstatement.php">Declaracion if</a></li>
		<li><a href="switchstatement.php">Declaracion switch</a></li>
		<li><a href="stringmanip.php">Manipulacion de cadenas</a></li>
		<li><a href="dateandtimemanip.php">Manipulacion de fecha y tiempo</a></li>
		<li><a href="functions.php">Funciones del usuario</a></li>



	</ul>

	
</body>
</html>