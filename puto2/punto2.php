<?php
$num1 = $_POST['dato1'];
$num2 = $_POST['dato2'];
$num3 = $_POST['dato3'];
$num4 = $_POST['dato4'];
$num5 = $_POST['dato5'];
$resultado = ($num3 + $num4 + $num5) / 3;

echo "Nombre del estudiante: ".$num1;
echo "<br>";
echo "Nombre de la asignatura: ".$num2;
echo "<br>";
echo "Su promedio es: ".$resultado
?>