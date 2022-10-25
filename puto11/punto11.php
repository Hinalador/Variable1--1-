<?php
    $costo = $_POST['costo'];

    $resultado = $costo + ($costo*0.15);
    echo "Se vederá a: ".$resultado."del precio ingresado";
?>