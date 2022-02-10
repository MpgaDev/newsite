<?php 
		$title = 'Manipulacion de fecha y tiempo';
		include 'includes-snippet/header.php' 
	?>
    <?php
        $datenow = getdate();
        echo "La fecha de hoy es:";
        echo $datenow['mday'] . '<br/>';
        echo $datenow['mon'] . '<br/>';
        echo $datenow['year'] . '<br/>';
        echo 'O mejor así...' . '<br/>';
        echo "La fecha de hoy es: " . $datenow['mday'] . '/' . $datenow['mon'] . '/' . $datenow['year'] . '<br/>' ;

        echo time() . '<br/>'; //lenguaje Unix

        print date("m/d/y G.i:s <br/>", time()) . '<br/>';
        print "Hoy es: ";
        print date("j F Y, \a\\t g.i a", time());
    
    ?>
    
    <?php require 'includes-snippet/footer.php' ?>