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
function raiz($valor1){
    $resultado=sqrt($valor1);
    return $resultado;
}
function seno($valor1){
    $resultado=sin($valor1);
    return $resultado;
}
function coseno($valor1){
    $resultado=cos($valor1);
    return $resultado;
}
function tangente($valor1){
    $resultado=tan($valor1);
    return $resultado;
}


$servidor->AddFunction('sumar');
$servidor->AddFunction('restar');
$servidor->AddFunction('multiplicar');
$servidor->AddFunction('dividir');
$servidor->AddFunction('raiz');
$servidor->AddFunction('seno');
$servidor->AddFunction('coseno');
$servidor->AddFunction('tangente');
$servidor->handle();

?>