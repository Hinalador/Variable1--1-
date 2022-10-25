<?php
    $capital = $_POST['capital'];


    if($capital<500){
        $resultado1 = $capital + ($capital*0.2);
        echo "la tasa de interés será del 2% mensual y el valor total será de: ".$resultado1;
    }elseif($capital>=500){
        $resultado2 = $capital + ($capital*0.45);
        echo "la tasa de interés será del 4.5% mensual y el valor total será de: ".$resultado2;
    }elseif($capital<1500){
        $resultado3 = $capital + ($capital*0.45);
        echo "la tasa de interés será del 4.5% mensual y el valor total será de: ".$resultado3;
    }elseif($capital>=1500){
        $resultado4 = $capital + ($capital*0.7);
        echo "la tasa de interés será del 7% mensual y el valor total será de: ".$resultado4;
    }
?>