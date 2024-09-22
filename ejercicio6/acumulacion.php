<?php
    $numero = $_GET["numero"];
    $suma = 0;
    for ($i = 1; $i <= $numero; $i++) {
        $suma += $i;
    }

    echo "El resultado de la iteración es $suma";

?>