<?php
    $numero = $_GET["numero"];
    $multiplicacion = 0;
    for ($i = 1; $i <= 10; $i++) {
        $multiplicacion = $i * $numero;
        echo $i . " x " . $numero . " = " . $multiplicacion . "<br>";
    }


?>