<?php
    $numero = $_GET["numero"];

    if(isset($numero)&& is_numeric($numero)){
        switch ($numero) {
            case "1":
                echo "Lunes";
                break;
            case "2":
                echo "Martes";
                break;
            case "3":
                echo "Miércoles";
                break;
            case "4":
                echo "Jueves";
                break;
            case "5":
                echo "Viernes";
                break;
            case "6":
                echo "Sábado";
                break;
            case "7":
                echo "Domingo";
                break;
            
            default:
               echo "El número introducido no corresponde a ningún día de la semana";
        }
    }else{
        print("Debes introducir un valor numérico");
    }

?>