<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
</head>
<body>
    <form action="request.php" method="post">
        <input type="number" name="intA"> 
        <select name="opcion" id="OPCION">
             <option value="suma">+</option>
             <option value="resta">-</option> 
             <option value="multiplicar">X</option> 
             <option value="dividir">÷</option> 
        </select> 
        <input type="number" name="intB"><br>
        
        <button type="submit">CALCULAR</button>
    </form>
</body>
</html>