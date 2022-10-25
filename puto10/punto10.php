<?php
    $valor = $_POST['valor'];

    if($valor>=20000){
        $resultado = $valor - ($valor*0.2);
        echo "El valor será de ".$resultado." aplicando el 20% de descuento";
    }else{
        echo "El valor será de ".$valor." sin el 20% de descuento";
    }
?>