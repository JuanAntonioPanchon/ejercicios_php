<?php
    $numero = $_GET["numero"];

    if ($numero < 12) {
        echo "Infante";
    } elseif ($numero >= 12 && $numero < 18) {
        echo "Adolescente";
    } elseif ($numero >= 18 && $numero < 61) {
        echo "Adulto";
    } else {
        echo "Anciano";
    }

?>