<?php
header ("Content-Type: text/html;charset=utf-8");

    $numero = 0;
    $numerotab = 8;  

    if ($numerotab > 0){
    while($numero <= 10){
    echo $numero." x ".$numerotab." = ".($numero*$numerotab)."<br>";
    $numero++;
    }
    exit;
    }

    echo "Número inválido";
    exit;
?>