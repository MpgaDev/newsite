<?php 
		$title = 'Manipulacion de Strings';
		include 'includes-snippet/header.php' 
	?>
    <?php
        $frase1= "lights will guide you home";
        $frase2= "and ignite your bones";
        //busco concatenar las frases de arriba, en php se hace con ".":
        echo $frase1 . ", " . $frase2;
        echo "<br/>";
        echo "<hr/>";
        //Transformación de String
        $nombre= "juan perez lopez";
        echo 'Mayuscula en la primera letra: ' . ucfirst($nombre) . '<br/>';
        echo 'Mayuscula en la primera letra de cada palabra: ' . ucwords($nombre) . '<br/>';
        echo 'Todo en mayuscula: ' . strtoupper($nombre) . '<br/>';
        echo 'Todo en minuscula: ' . strtolower("MAYUSCULAS") . '<br/>';
        echo "<hr/>";
        //repeticion de String
        echo 'Repetir String: ' . str_repeat('a',5) . '<br/>';
        echo 'Repetir String - Función anidada: ' . strtoupper(str_repeat('a',5)) . '<br/>';
        echo "<hr/>";
        //Tener un substring
        echo 'Conseguir un substring: ' . substr($nombre, 2,8) . '<br/>';
        //encontrar la posicion de un String
        echo 'Encontrar posicion del String: ' . strpos($nombre,'o') . '<br/>'; 
        echo 'Encontrar posicion del String: ' . strpos($nombre,'w') . '<br/>'; //devuelve NULL
        //encontrar la posicion de un character
        echo 'Encontrar posicion del character "r": ' . strchr($nombre,'r') . '<br/>';
        echo 'Encontrar posicion del character "R": ' . strchr($nombre,'R') . '<br/>';
        echo 'Encontrar posicion del character "z": ' . strchr($nombre,'z') . '<br/>';
        echo "<hr/>";
        //saber el largo de una cadena
        echo 'Encontrar el largo de una cadena: ' . strlen($nombre) . '<br/>' ;
        //sacar los espacios a la izquierda y/o derecha de un String
        echo 'sin trim: ' . 'A' . ' B C D ' . 'E' . '<br/>';
        echo 'con trim: ' . 'A' . trim(' B C D ') . 'E' . '<br/>';
        echo 'con ltrim: ' . 'A' . ltrim(' B C D ') . 'E' . '<br/>';
        echo 'con rtrim: ' . 'A' . rtrim(' B C D ') . 'E' . '<br/>';

        echo "Reemplazar un String con otro: " . str_replace("guide","guiiiiidee",$frase1) . '<br/>';

    ?>
<?php require 'includes-snippet/footer.php' ?>