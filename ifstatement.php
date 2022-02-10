<?php 
		$title = 'Condicional if';
		include 'includes-snippet/header.php' 
	?>
    <?php

        //Una declaración If que va a llevar a cabo una acción teniendo en cuenta la variable
        $nota= 70;
        // comparaciones: ==, > , <, >= , <= , ===

        if ($nota >=70){
            echo '<h3 style= "color: green"> Pasaste </h3>';
        } else{
            echo '<h3 style= "color: red"> Fallaste </h3>';
        }

    ?>
<?php require 'includes-snippet/footer.php' ?>