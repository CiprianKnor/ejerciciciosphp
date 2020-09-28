<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $nombre = "Santiago";
    $apellido = "Garrido";
    $apellido2 = "De Rueda";
    $edad = "20";
    $nacionalidad = "Española";
    ?>
    <table>
        <tr>
            <th>Nombre</th>
            <td> <?php echo $nombre ?> </td>
        </tr>
        <tr>
            <th>Apellidos</th>
            <td> <?php echo $apellido ?> </td>
            <td> <?php echo $apellido2 ?> </td>
        </tr>
        <tr>
            <th>Edad</th>
            <td> <?php echo $apellido2 ?></td>
        </tr>
        <tr>
            <th>Nacionalidad</th>
        </tr>
</body>
</html>