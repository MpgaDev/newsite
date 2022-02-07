<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning page - If statements</title>
</head>
<body>
    <?php

        //Una declaración If que va a llevar a cabo una acción teniendo en cuenta la variable
        echo '<h2> If statement </h2>';
        $nota= 70;
        // comparaciones: ==, > , <, >= , <= , ===

        if ($nota >=70){
            echo '<h3 style= "color: green"> Pasaste </h3>';
        } else{
            echo '<h3 style= "color: red"> Fallaste </h3>';
        }

    ?>
</body>
</html>