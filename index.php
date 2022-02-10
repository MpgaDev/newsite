	<?php 
		$title = 'Home';
		include 'includes-snippet/header.php' 
	?>
	<!-- HTML BASICO -->
	<?php 
		//PRINT EN HTML USANDO ECHO
		echo 'hola PHP!';
		//Se puede mezclar echo con tags HTML
		echo '<br/>'; //se renderea el codigo html
		echo 'Segunda linea';
		echo '<br/>'
	?>
	<?php
		//Las variables solo necesitan un "$", no estan fuertemente tipadas como en otros lenguajes
		$nombre = "Geraldine";
		$edad = 918;
		//echo de variables
		echo $nombre;
		echo '<h4> Mi nombre es: '.$nombre.' </h4>';
		echo '<h4> Mi edad es: '.$edad.' </h4>';
		//se pueden usar doble comillas
		echo "<h3> Texto con doble comillas </h4>";

	?>

<?php require 'includes-snippet/footer.php' ?>