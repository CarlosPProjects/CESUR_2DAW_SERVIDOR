<?php

    $str = $_POST['hexadecimal'];

    //retiramos el # del String
    $hexadecimal = substr($str, 1);

    //Obtener pares de String de la variable hexadecimal.
    $par_1 = substr($hexadecimal, 0, 2);
    $par_2 = substr($hexadecimal, 2, 2);
    $par_3 = substr($hexadecimal, -2);

    //Convertimos las variables hexadecimales a decimales.
    $RGB_1 = hexdec($par_1);
    $RGB_2 = hexdec($par_2);
    $RGB_3 = hexdec($par_3);

    //Mostramos los valores de cada variable.
    echo <<<END
    # $hexadecimal <br>
    <br>
    R $RGB_1 <br>
    G $RGB_2 <br>
    B $RGB_3 <br>
    END;
?>