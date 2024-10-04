<?php
    $numero = $_GET["numero"];
    $multiplicacion = 0;

    if($numero>0 && $numero <= 10 && isset($numero)){
        for ($i = 1; $i <= 10; $i++) {
            $multiplicacion = $i * $numero;
            echo $i . " x " . $numero . " = " . $multiplicacion . "<br>";
        }    
    }else{
        print("El número introducido debe ser entre 0 y 10");
    }

    

?>