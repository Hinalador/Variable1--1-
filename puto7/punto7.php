<?php
    $Nombre = $_POST['Nombre'];
    $Asignatura = $_POST['Asignatura'];
    $Calificacion = $_POST['Calificacion'];

    if($Calificacion<7){
        echo $Nombre." ha REPROBADO la asignatura de ".$Asignatura;
    }else{
        echo $Nombre." ha APROBADO la asignatura de ".$Asignatura;
    }
?>