<?php 
		$title = 'Bucle for';
		include 'includes-snippet/header.php' 
	?>
    <?php
        for($contador=0; $contador<10;$contador++){
            echo "<p>Hola mundo!</p>";
        }
        for($contador=1; $contador<11;$contador++){
            echo "<p>El contador es: $contador</p>";
        }
    ?>
<?php require 'includes-snippet/footer.php' ?>