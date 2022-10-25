<?php
    $h1 = $_POST['h1'];
    $h2 = $_POST['h2'];

    
    if($h1>$h2){
        $resultado = $h1 - $h2;
        echo "El hermano que tiene ".$h1." es mayor que el hermano que tiene ".$h2." y su diferencia de edad es de ".$resultado." años";
    }else{
        $resultado = $h2- $h1;
        echo "El hermano que tiene ".$h2." es mayor que el hermano que tiene ".$h1." y su diferencia de edad es de ".$resultado." años";
    };
?>