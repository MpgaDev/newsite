<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning - Do y do while</title>
</head>
<body>
    <h1> Bucle while</h1>
    <?php
        $numero=0;
        //While es un bucle de pre-condición, si "$numero" no existiera, no se ejecutaría el bucle.
        while($numero<10){
            echo '<p>Soy menor que 10!</p>';
            $numero++;
        }
        echo 'Fin del loop!';
    ?>

    <h1> Bucle do while</h1>

    <?php
        //bucle post-condición. Lo utilizo cuando quiero que algo se haga al menos una vez antes de ejecutar el bucle

        do{
            echo 'Bucle do while';
        } while($numero<10);
    ?>
</body>
</html>