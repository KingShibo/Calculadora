
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Calculadora</title>
    </head>
    <body>
        <h1>Calculadora</h1>
        <form action="cliente.php" method="post">
            <input type="number" name="intA"> 
            <select name="opcion" id="opcion">
                <option value="+">+</option>
                <option value="-">-</option> 
                <option value="X">X</option> 
                <option value="÷">÷</option>
                <option value="√">√</option>
                <option value="sin">sin</option>
                <option value="cos">cos</option>
                <option value="¶">¶</option>
            </select> 
            <input type="number" name="intB" id="intB"><br>
            <button type="submit">CALCULAR</button>
        </form>
    </body>
    <script>
        window.onload = function(){
            var opcion = document.getElementById('opcion');
            opcion.onclick = function () {
                switch(opcion.value){
                    case "+": document.getElementById('intB').style.visibility="visible"; break;
                    case "-": document.getElementById('intB').style.visibility="visible"; break;
                    case "X": document.getElementById('intB').style.visibility="visible"; break;
                    case "÷": document.getElementById('intB').style.visibility="visible"; break;
                    case "√": document.getElementById('intB').style.visibility="hidden"; break;
                    case "sin": document.getElementById('intB').style.visibility="hidden"; break;
                    case "cos": document.getElementById('intB').style.visibility="hidden"; break;
                    case "¶": document.getElementById('intB').style.visibility="hidden"; break;
                }
            };
        }
    </script>
</html>