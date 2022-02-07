<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning - Arrays</title>
</head>
<body>
    <h1>Arrays</h1>
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
</body>
</html>