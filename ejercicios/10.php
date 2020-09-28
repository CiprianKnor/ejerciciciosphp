<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $animales = [
            1 => "base",
            2 => "escolta",
            3 => "alero",
            4 => "alapivot",
            5 => "pivot"
        ];

        foreach($animales as $clave => $animal){
            echo $animal . "<br>";
        }
    ?>

</body>
</html>