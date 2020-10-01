<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="15action.php" method="post">

<input type="checkbox" name="nombres[]" id="nombre1" value="Pepe">
<label for="nombre1">Pepe</label>

<input type="checkbox" name="nombres[]" id="nombre2" value="Cipri">
<label for="nombre2">Cipri</label>

<input type="checkbox" name="nombres[]" id="nombre3" value="Juan">
<label for="nombre3">Juan</label>

<button type="submit">Enviar</button>

</form>
</body>
</html>