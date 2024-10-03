<?php
    $numero = $_GET["numero"];
    $suma = 0;


    if (isset($numero)) {
        for ($i = 1; $i <= $numero; $i++) {
            $suma += $i;
        }
        echo "El resultado de la iteración es $suma";
    }else {
        echo "No puedes dejar el campo numérico null";
    }
    

?>