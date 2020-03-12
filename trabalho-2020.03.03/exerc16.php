<?php
header ("Content-Type: text/html;charset=utf-8");

    $numero = 8;  

    if ($numero >= 0){
    for($i=0; $i<=10; $i++)
    echo $numero." x ".$i." = ".($numero*$i)."<br>";
    exit;
    }

    echo "Número inválido";
    exit;
?>