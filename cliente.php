<?php
$cliente = new SoapClient("http://localhost/calculadora/funciones.wsdl");

if($_POST){

    // var_dump($cliente->__getFunctions());
    if(!empty($_POST['intA']) && !empty($_POST['intB'])){
        switch($_POST['opcion']){
            case '+':$resultado=$cliente->sumar($_POST['intA'],$_POST['intB']);break;
            case '-':$resultado=$resultado=$cliente->restar($_POST['intA'],$_POST['intB']);break;
            case 'x':$resultado=multiply();break;
            case '÷':$resultado=divide();break;
            default: echo 'Opcion Erronea';
        }
    }else{
        echo 'No has Escrito los numeros';
    }
}


function multiply($valores){
    $resultado=$cliente->Multiply($valores)->MultiplyResult;
    return $resultado;
}

function divide($valores){
    $resultado=$cliente->Divide($valores)->DivideResult;
    return $resultado;
}





echo "RESULTADO: ".$_POST['intA'] .$_POST['opcion']. $_POST['intB']." = $resultado";
?>