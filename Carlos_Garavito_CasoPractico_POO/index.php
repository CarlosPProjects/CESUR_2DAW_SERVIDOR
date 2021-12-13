<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include_once 'php/dado.php';

        $jugador = new Dado(1, 7);
        
        for ($i=1; $i <= 12; $i++) { 
            echo "El tiro numero ".$i." ha sido ".$jugador->tirarDado()."</br>";
        }

    ?>
</body>
</html>