<?php
    $velocidad = $_GET["velocidad"];
    $distancia = $_GET["distancia"];
    $tiempo = $distancia / $velocidad;
    echo "Vas a tardar $tiempo horas";
?>