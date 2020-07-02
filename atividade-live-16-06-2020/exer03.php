<?php

$numero1 = $_REQUEST["numero1"] ;
$numero2 = $_REQUEST["numero2"] ;

$retornoJson = array( ) ;

$retornoJson["operacao"] = "comparacao" ;
$retornoJson["numero1"] = $numero1 ;
$retornoJson["numero2"] = $numero2 ;


echo json_encode( $retornoJson ) ;

echo "<br>" ;

if( $numero1 > $numero2){
     echo $numero1 . " > " . $numero2 ;
 }else{
     echo $numero2 . " > " . $numero1 ;
 }
?>