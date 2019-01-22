
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
            </select> 
            <input type="number" name="intB"><br>
            <button type="submit">CALCULAR</button>
        </form>
    </body>
</html>