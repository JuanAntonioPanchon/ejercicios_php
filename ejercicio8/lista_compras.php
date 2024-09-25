<?php
    $listaCompra = explode("\n" , trim($_GET['lista']));
    

    echo "<ol>";
    for($i=0; $i<count($listaCompra); $i++){
        echo "<li>" . $listaCompra[$i] . "</li>";
    }

    echo "</ol>";
    


?>