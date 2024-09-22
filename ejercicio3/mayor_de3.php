<?php
    $numero1 = $_GET["numero1"];
    $numero2 = $_GET["numero2"];
    $numero3 = $_GET["numero3"];

    if ($numero1 >= $numero2 && $numero1 >= $numero3) {
        echo "El número mayor es $numero1";
    } elseif ($numero2 >= $numero1 && $numero2 >= $numero3) {
        echo "El número mayor es $numero2";
    } else {
        echo "El número mayor es $numero3";
    }

?>