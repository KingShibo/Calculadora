<?php
$cliente = new SoapClient("http://localhost/calculadora/funciones.wsdl");

if($_POST){

    // var_dump($cliente->__getFunctions());
    if(!empty($_POST['intA'])){
        switch($_POST['opcion']){
            case '+':$resultado=$cliente->sumar($_POST['intA'],$_POST['intB']);break;
            case '-':$resultado=$cliente->restar($_POST['intA'],$_POST['intB']);break;
            case 'X':$resultado=$cliente->multiplicar($_POST['intA'],$_POST['intB']);break;
            case '÷':$resultado=$cliente->dividir($_POST['intA'],$_POST['intB']);break;
            case '√':$resultado=$cliente->raiz($_POST['intA']);break;
            case 'sin':$resultado=$cliente->seno($_POST['intA']);break;
            case 'cos':$resultado=$cliente->coseno($_POST['intA']);break;
            case '¶':$resultado=$cliente->tangente($_POST['intA']);break;
            default: echo 'Opcion Erronea';
        }
    }else{
        echo 'No has Escrito los numeros';
    }
}

echo "RESULTADO: ".$_POST['intA'] .$_POST['opcion']. $_POST['intB']." = $resultado";
?>