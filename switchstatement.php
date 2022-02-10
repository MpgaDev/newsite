<?php 
		$title = 'Condicional switch';
		include 'includes-snippet/header.php' 
	?>

    <?php 
        $nota= 'A';

        switch($nota){
            case 'A':
                echo '<h2 style= "color: green"> Bien! </h2>';
                break;
            case 'B':
                echo'<h2 style= "color: blue"> Aprobado! </h2>';
                break;
            default:
                echo '<h2 style= "color: Orange"> Mejorable </h2>';
                break;        
        }

    ?>
<?php require 'includes-snippet/footer.php' ?>