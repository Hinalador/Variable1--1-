<?php
    $Valor_volante = $_POST['#volantes'];
    $Valor_poster = $_POST['#posters'];
    $Valor_tarjeta = $_POST['#tarjetas'];

    $totalV = $Valor_volante*2000;
    $totalP = $Valor_poster*5000;
    $totalT = $Valor_tarjeta*500;

    $total = ($Valor_volante*2000) + ($Valor_poster*5000) + ($Valor_tarjeta*500);

    echo "Valor total por volante: ".$totalV;
    echo "<br>";
    echo "<br>";
    echo "Valor total por poster: ".$totalP;
    echo "<br>";
    echo "<br>";
    echo "Valor total por tarjeta: ".$totalT;
    echo "<br>";
    echo "<br>";
    echo "pago total: ".$total;
?>