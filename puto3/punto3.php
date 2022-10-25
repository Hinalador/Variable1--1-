<?php
$p_ganados = $_POST['Pganados'];
$p_empatados = $_POST['Pempatados'];
$p_perdidos = $_POST['Pperdidos'];

$resultado = ($p_ganados*3) + ($p_perdidos*0) + ($p_empatados*1);

echo "su puntaje total es: ".$resultado;
?>