<?php

$servidor = new SoapServer('http://localhost/calculadora/funciones.wsdl');
function sumar($valor1,$valor2){
    $intA=$valor1;
    $intB=$valor2;
    $resultado=$intA+$intB;
    return $resultado;
}
function restar($valor1,$valor2){
    $intA=$valor1;
    $intB=$valor2;
    $resultado=$intA-$intB;
    return $resultado;
}
function multiplicar($valor1,$valor2){
    $intA=$valor1;
    $intB=$valor2;
    $resultado=$intA*$intB;
    return $resultado;
}
function dividir($valor1,$valor2){
    $intA=$valor1;
    $intB=$valor2;
    $resultado=$intA/$intB;
    return $resultado;
}


$servidor->AddFunction('sumar');
$servidor->AddFunction('restar');
$servidor->AddFunction('multiplicar');
$servidor->AddFunction('dividir');
$servidor->handle();

?>