<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="14action.php" method="post">
        <input type="text" name="valor1" required><br>
        <!-- <input type="radio" name="digito" value="multiplo" checked> multiplo <br>
        <input type="radio" name="digito" value="divisor" checked> divisor <br>
        <input type="radio" name="digito" value="suma" checked> suma <br>
        <input type="radio" name="digito" value="resta"> resta <br> -->
        <input type="text" name="valor2" required><br>
        <select name="operador">
            <option>+</option>
            <option>-</option>
            <option>/</option>
            <option>*</option>
        </select>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>