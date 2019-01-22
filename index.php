<?php
$resultado="";
if($_POST){
    if(!empty($_POST['intA']) && !empty($_POST['intB'])){
        $valores= array("intA"=>$_POST['intA'],"intB"=>$_POST['intB']);
        switch($_POST['opcion']){
            case '+':$resultado=add($valores);break;
            case '-':$resultado=subtract($valores);break;
            case 'x':$resultado=multiply($valores);break;
            case '÷':$resultado=divide($valores);break;
            default: 'Opcion Erronea';
        }
    }else{
        echo 'No has Escrito los numeros';
    }
}
function add($valores){
    $client = new SoapClient("http://www.dneonline.com/calculator.asmx?WSDL");
    $resultado=$client->Add($valores)->AddResult;
    return $resultado;
}

function subtract($valores){
    $client = new SoapClient("http://www.dneonline.com/calculator.asmx?WSDL");
    $resultado=$client->Subtract($valores)->SubtractResult;
    return $resultado;
}

function multiply($valores){
    $client = new SoapClient("http://www.dneonline.com/calculator.asmx?WSDL");
    $resultado=$client->Multiply($valores)->MultiplyResult;
    return $resultado;
}

function divide($valores){
    $client = new SoapClient("http://www.dneonline.com/calculator.asmx?WSDL");
    $resultado=$client->Divide($valores)->DivideResult;
    return $resultado;
}

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Calculadora</title>
    </head>
    <body>
       <h1>CALCULADORA</h1>
        <form action="" method="post">
            <input type="number" name="intA"> 
            <select name="opcion" id="OPCION">
                <option value="+">+</option>
                <option value="-">-</option> 
                <option value="x">x</option> 
                <option value="÷">÷</option> 
            </select> 
            <input type="number" name="intB"><br>

            <button type="submit">CALCULAR</button>
        </form>
        <?php if($resultado!="") echo "RESULTADO: ".$_POST['intA'] .$_POST['opcion']. $_POST['intB']." = $resultado" ?>
    </body>
</html>