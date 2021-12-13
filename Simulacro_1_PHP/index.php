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
        include_once 'php/player.php';

        /**
         * - nombre: ?string
         * - dorsal: integer
         * - edad: integer
         * 
         */
        $jugador = new Jugador('Carlos', 11, 20);
        $jugador->mayorDeEdad($jugador->getEdad());
        $jugador->mostrarDatos();

    ?>
</body>
</html>