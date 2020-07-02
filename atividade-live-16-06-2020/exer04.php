<?php

$numero1 = $_REQUEST["numero1"] ;
$numero2 = $_REQUEST["numero2"] ;

$divisao = $numero1 / $numero2 ;

$retornoJson = array( ) ;

$retornoJson["operacao"] = "divisao" ;
$retornoJson["numero1"] = $numero1 ;
$retornoJson["numero2"] = $numero2 ;
$retornoJson["resultado"] = $divisao ;

if ($numero2 = 0){
    echo "divisao invalida" ;
}else{
    echo json_encode( $retornoJson ) ;
}
?>