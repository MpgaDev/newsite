<?php 
		$title = 'Bucles while y do while';
		include 'includes-snippet/header.php' 
	?>
    <?php
        $numero=0;
        //While es un bucle de pre-condición, si "$numero" no existiera, no se ejecutaría el bucle.
        while($numero<10){
            echo '<p>Soy menor que 10!</p>';
            $numero++;
        }
        echo 'Fin del loop!';
    ?>

    <h3> Bucle do while</h3>

    <?php
        //bucle post-condición. Lo utilizo cuando quiero que algo se haga al menos una vez antes de ejecutar el bucle

        do{
            echo 'Bucle do while';
        } while($numero<10);
    ?>
<?php require 'includes-snippet/footer.php' ?>