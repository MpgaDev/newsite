<?php 
	$title = 'Array';
	include 'includes-snippet/header.php' 
?>
<?php
    $numeros = array(1,2,3,4,5,6,110,111,112);

    echo $numeros[3];
    echo "<p> $numeros[5] </p>";

    //medir el tamaño del array
    $size = count($numeros);
    echo "<p> El tamaño del array numeros es: $size";

    //Mostrar todo el array
    for ($contador=0; $contador < $size ; $contador++){
        echo "<p> $numeros[$contador]</p>";
    }
?>
<?php require 'includes-snippet/footer.php' ?>