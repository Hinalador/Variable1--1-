<?php
    $nombre = $_POST['Nombre'];
    $asignatura = $_POST['Asignatura'];
    $nota1 = $_POST['Nota1'];
    $nota2 = $_POST['Nota2'];
    $nota3 = $_POST['Nota3'];

    echo "Estudiante: ".$nombre;
    echo "<br>";
    echo "Asignatura: ".$asignatura;
    echo "<br>";
    
    $resultado = ($nota1 * 0.3) + ($nota2 * 0.3) + ($nota3 * 0.4);
    
    if($resultado>=4.0){
        echo "Aprobado";
    }else{
        echo "Reprobado";
    }
?>