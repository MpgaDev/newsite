<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning - Manipulacion de fecha y tiempo</title>
</head>
<body>
    <h1> Manipulacion de fecha y tiempo </h1>
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
    
</body>
</html>