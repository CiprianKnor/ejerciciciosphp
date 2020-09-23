<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        define('SIZE', 8);

        for($tabla = 1; $tabla <= 10; $tabla++){
            echo $tabla * SIZE;
            echo "<br>";
        }
    ?>

</body>
</html>