<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning - Switch statement</title>
</head>
<body>
    <h1> Switch statement </h1>

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
</body>
</html>