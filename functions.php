<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning - Funciones del usuario</title>
</head>
<body>
    <h1>Funciones del usuario</h1>
    <?php
        //Definiendo una funcion
        function escribirMensaje(){
            echo "Ten un lindo dia! <br/>";
        }
            
        //Llamando una funcion
        escribirMensaje();
        echo "<hr/>";

        //Funciones con parametros
        function funcionAniadir($num1,$num2){
            $sum= $num1 + $num2;
            echo "la suma de $num1 y $num2 es: $sum <br/>";
        }
        $numero= 300;
        funcionAniadir(200,$numero);

        //Funciones y parametros por referencia
        function aniadirAString(&$string){
            $string .= " y algo mas. <br/>";
        }

        $cadena= 'Esto es un String';
        aniadirAString($cadena);
        echo $cadena; //imprme "Esto es un String y algo mas."

        //funcion con retorno
        function retorno($num1,$num2){
            $producto = $num1 * $num2;
            return $producto;
        }
        echo retorno(3,4);

    ?>
</body>
</html>