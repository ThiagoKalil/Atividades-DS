<?php

$numero1 = $_REQUEST["numero1"] ;

$retornoJson = array( ) ;

$retornoJson["operacao"] = "operacao" ;
$retornoJson["numero1"] = $numero1 ;

echo json_encode( $retornoJson ) ;

echo "<br>" ;

if ($numero1 > 0){
    echo "numero positivo" ;
}elseif ($numero1 == 0){
    echo "numero neutro" ;
}else{
    echo "numero negativo" ;
}

?>