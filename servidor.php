<?php

$servidor = new SoapServer('http://localhost/calculadora/funciones.wsdl');
function sumar($valor1,$valor2){
    $intA=$valor1;
    $intB=$valor2;
    $suma=$intA+$intB;
    return $suma;
}
function restar($valor1,$valor2){
    $intA=$valor1;
    $intB=$valor2;
    $resta=$intA-$intB;
    return $resta;
}


$servidor->AddFunction('sumar');
$servidor->AddFunction('restar');
$servidor->handle();

?>